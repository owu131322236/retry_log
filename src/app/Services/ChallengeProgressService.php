<?php

namespace App\Services;

use App\Enums\ChallengeFrequency;
use App\Models\Challenge;
use App\Models\ChallengeLog;
use Carbon\Carbon;

class ChallengeProgressService
{
    public function calculateProgress($userId, $mode = '1w')
    {
        $today = Carbon::today();
        $start = match ($mode) {
            '1m' => $today->copy()->subMonth(),
            '6m' => $today->copy()->subMonths(6),
            '1y' => $today->copy()->subYear(),
            default => $today->copy()->subWeek(),
        };
        $challenges = Challenge::where('user_id', $userId)
            ->where(function ($query) use ($start, $today) {
                $query
                    ->whereBetween('start_date', [$start, $today]) //開始が期間内
                    ->orWhere(function ($query2) use ($start, $today) {
                        $query2->where('start_date', '<=', $start) //開始が過去
                            ->where(function ($query3) use ($today) {
                                $query3->where(function ($q) use ($today) {
                                    $q->whereNull('end_date')
                                        ->orWhere('end_date', '>=', $today);
                                });
                            });
                    });
            })
            ->get();
        $logs = ChallengeLog::with('challengeStatus')
            ->whereIn('challenge_id', $challenges->pluck('id')) //pluckでidだけの配列を取得
            ->whereBetween('logged_at', [$start, $today])
            ->get();
        $expectedTotal = $challenges->sum(function ($challenge) use ($start, $today) {
            $goal = $challenge->frequency_goal ?? 1;
            $type = $challenge->frequency_type->value;
            $days = $start->copy()->diffInDays($today) + 1;
            return match ($type) {
                'daily' => (float)($days * $goal),
                'weekly' => (float)(($days / 7) * $goal),
                'monthly' => (float)(($days / 30) * $goal),
                default => 0.0,
            };
        });
        $successCount = $logs->filter(function ($log) {
            return $log->challengeStatus?->name === 'success';
        })->count();
        $achievementRate = $expectedTotal > 0 ? $successCount / $expectedTotal : 0;
        
        // $groupKey = match($mode){
        //     '1w' => 'Y-m-d',
        //     '1m' => 'Y-m-W', 
        //     '6m' => 'Y-m-w',
        //     '1y' => 'Y-m',
        //     default => 'Y-m-d',
        // };
        
        return collect([
            'mode' => $mode,
            'start' => $start->toDateString(),
            'end' => $today->toDateString(),
            'expected_total' => $expectedTotal,
            'success_total' => $successCount,
            'challenges' => $challenges,
            'achievement_rate' => round($achievementRate * 100, 2),
        ]);
    }
    public function calculateProgressDetail($userId, $mode = '1w')
    {
        $today = Carbon::today();
        $end = $today;
        $dataDetail = collect();
        $periods = $this->splitPeriod($end, $mode);
        $challenges = Challenge::where('user_id', $userId)->get();

        foreach ($periods as $period) {
            $start = $period['start']->copy()->startOfDay();
            $end = $period['end']->copy()->endOfDay();

            $logs = ChallengeLog::with('challengeStatus')
                ->whereBetween('logged_at', [
                    $start->copy()->startOfDay()->toDateTimeString(),
                    $end->copy()->endOfDay()->toDateTimeString(),])
                ->whereIn('challenge_id', $challenges->pluck('id'))
                ->get();

            $successCount = $logs->filter(fn($log) => $log->challengeStatus?->name === 'success')->count();

            $expectedTotal = $challenges->sum(function ($ch) use ($start, $end) {
                $goal = $ch->frequency_goal ?? 1;
                $type = $ch->frequency_type;
                $days = $start->diffInDays($end) + 1; //合計日数

                return match ($type) {
                    'daily' => $days * $goal,
                    'weekly' => ceil($days / 7) * $goal,
                    'monthly' => ceil($days / 30) * $goal,
                    default => 0,
                };
            });

            $achievementRate = $expectedTotal > 0
                ? round(($successCount / $expectedTotal) * 100, 2)
                : 0;
            $dataDetail->push([
                    'periods' => $periods,
                    'start' => $start,
                    'end' => $end,
                    'success_total' => $successCount,
                    'expected_total' => $expectedTotal,
                    'achievement_rate' => $achievementRate,
            ]);
        }
        return $dataDetail;
    }
    private function splitPeriod(Carbon $end, $mode)
    {
        $periods = collect();

        switch ($mode) {
            case '1w':
                $currentStart = $end->copy()->startOfWeek(Carbon::SUNDAY);
                while ($currentStart->lte($end)) { //lte = less than or equal
                    $periods->push([
                        'start' => $currentStart->copy()->startOfDay(),
                        'end' => $currentStart->copy()->endOfDay(),
                    ]);
                    $currentStart->addDay(); //+1日する
                }
                break;

            case '1m':
                $currentStart = $end->copy()->startOfMonth()->startOfWeek(Carbon::SUNDAY);
                while ($currentStart->lte($end)) {
                    $periods->push([
                        'start' => $currentStart->copy()->startOfDay(),
                        'end' => $currentStart->copy()->endOfWeek(Carbon::SATURDAY)->endOfDay(),
                    ]);
                    $currentStart->addWeek();
                }
                break;
            case '6m':
                $start = $end->copy()->subMonths(5)->startOfMonth();
                $currentStart = $start->copy();
                while ($currentStart->lte($end)) {
                    $periods->push([
                        'start' => $currentStart->copy()->startOfDay(),
                        'end' => $currentStart->copy()->endOfMonth()->endOfDay(),
                    ]);
                    $currentStart->addMonth();
                }
                break;
            case '1y':
                $start = $end->copy()->subMonths(11)->startOfMonth();
                $currentStart = $start->copy();
                while ($currentStart->lte($end)) {
                    $periods->push([
                        'start' => $currentStart->copy()->startOfDay(),
                        'end' => $currentStart->copy()->endOfMonth()->endOfDay(),
                    ]);
                    $currentStart->addMonth();
                }
                break;
        }
        return $periods;
    }

    public function getRetryRate($userId, $mode = '1w')
    {
        $today = Carbon::today();
        $start = match ($mode) {
            '1m' => $today->copy()->subMonth(),
            '6m' => $today->copy()->subMonths(6),
            '1y' => $today->copy()->subYear(),
            default => $today->copy()->subWeek(),
        };
        $logs = ChallengeLog::with(['challengeStatus', 'challenge'])
            ->whereHas('challenge', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->whereBetween('logged_at', [$start, $today])
            ->get();
        $retryCount = 0;
        $failCount = 0;
        $logs->groupBy('challenge_id')->each(function ($challengeLogs) use (&$retryCount, &$failCount) {
            for ($i = 0; $i < $challengeLogs->count() - 1; $i++) {
                $currentChallengeLog = $challengeLogs->get($i);
                $nextChallengeLog = $challengeLogs->get($i + 1);
                if ($currentChallengeLog->challengeStatus?->name === 'failed') {
                    $failCount++;
                    if ($nextChallengeLog->challengeStatus?->name === 'success') {
                        $retryCount++;
                    }
                }
            }
        });
        $retryRate = $failCount > 0 ? round($retryCount / $failCount, 2) : 0;
        return collect([
            'mode' => $mode,
            'start' => $start->toDateString(),
            'end' => $today->toDateString(),
            'retry_total' => $retryCount,
            'fail_total' => $failCount,
            'retry_rate' => $retryRate,
        ]);
    }
    public function challengeCountsByState($userId)
    {
        $states = ['not_started', 'in_progress', 'completed', 'interrupted', 'failed'];
        $counts = [];
        $totalChallenges = Challenge::where('user_id', $userId)->count();
        $completedChalenges = Challenge::where('user_id', $userId)
            ->where('state', 'completed')
            ->count();
        $ongoingChallenges = Challenge::where('user_id', $userId)
            ->where(function ($query) {
                $query->where('state', 'not_started')
                    ->orWhere('state', 'in_progress');
            })
            ->count();
        $endedChallenges = Challenge::where('user_id', $userId)
            ->where(function ($query) {
                $query->where('state', 'completed')
                    ->orWhere('state', 'interrupted')
                    ->orWhere('state', 'failed');
            })
            ->count();
        return [
            'total' => $totalChallenges,
            'completed' => $completedChalenges,
            'ongoing' => $ongoingChallenges,
            'ended' => $endedChallenges,
        ];
    }
}
