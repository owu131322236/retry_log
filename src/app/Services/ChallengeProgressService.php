<?php

namespace App\Services;

use App\Models\Challenge;
use App\Models\ChallengeLog;
use Carbon\Carbon;

class ChallengeProgressService{
    public function calculateProgress($userId, $mode = '1w')
    {
        $today = Carbon::today();
        $start = match($mode){
            '1m' => $today->copy()->subMonth(),
            '6m' => $today->copy()->subMonths(6),
            default => $today->copy()->subWeek(),
        };
        $challenges =Challenge::where('user_id', $userId)
            ->where(function($query)use($start, $today){
                $query
                ->whereBetween('start_date',[$start,$today]) //開始が期間内
                ->orWhere(function($query2)use($start,$today){
                    $query2->where('start_date','<=',$start) //開始が過去
                           ->where(function($query3)use($today){
                                $query3->where(function($q) use ($today) {
                                    $q->whereNull('end_date')
                                    ->orWhere('end_date', '>=', $today);
                                });
                        });
                });
            })
            ->get();
            $logs = ChallengeLog::with('status')
            ->whereIn('challenge_id', $challenges->pluck('id')) //pluckでidだけの配列を取得
            ->whereBetween('logged_at', [$start, $today])
            ->get();
        $expectedTotal = $challenges->sum(function($challenge)use($start,$today){
            $goal = $challenge->frequency_goal ?? 1;
            $type = $challenge->frequency_type;
            $days = $start->copy()->diffInDays($today) + 1;
            return match($type){
                'daily' => $days * $goal,
                'weekly' => ($days/7) * $goal,
                'monthly' => ($days/30) * $goal,
                default => 0,
            };
        });
        $successCount = $logs->filter(function($log){
            return $log->status->name === 'success';
        })->count();
        $achievementRate = $expectedTotal > 0 ? $successCount / $expectedTotal : 0;
        $groupKey = match($mode){
            '6m' => 'Y-m-w',
            '1y' => 'Y-m',
            default => 'Y-m-d',
        };
            return collect([
                'mode' => $mode,
                'start' => $start->toDateString(),
                'end' => $today->toDateString(),
                'expected_total' => $expectedTotal,
                'success_total' => $successCount,
                'challenges_count' => $challenges->count(),
                'achievement_rate' => round($achievementRate * 100, 2),
            ]);
    }
    public function getRetryRate($userId, $mode = '1w')
    {
        $today = Carbon::today();
        $start = match($mode){
            '1m' => $today->copy()->subMonth(),
            '6m' => $today->copy()->subMonths(6),
            default => $today->copy()->subWeek(),
        };
        $logs = ChallengeLog::with(['status','challenge'])
        ->whereHas('challenge',function($query)use($userId){
            $query->where('user_id',$userId);
        })
        ->whereBetween('logged_at', [$start, $today])
        ->get();
        $retryCount = 0;
        $failCount = 0;
        $logs->groupBy('challenge_id')->each(function($challengeLogs)use(&$retryCount, &$failCount){
            for($i = 0; $i < $challengeLogs->count() -1; $i++){
                $currentChallengeLog = $challengeLogs->get($i);
                $nextChallengeLog = $challengeLogs->get($i + 1);
                if($currentChallengeLog->status->name === 'failed'){
                    $failCount++;
                    if($nextChallengeLog->status->name === 'success'){
                        $retryCount++;
                    }
                }
            }
        });
        $retryRate = $failCount > 0 ? round($retryCount / $failCount,2) : 0;
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
        $states = ['not_started','in_progress', 'completed', 'interrupted','failed'];
        $counts = [];
        $totalChallenges = Challenge::where('user_id', $userId)->count();
        $completedChalenges = Challenge::where('user_id', $userId)
            ->where('state', 'completed')
            ->count();
        $ongoingChallenges = Challenge::where('user_id', $userId)
            ->where(function($query){
                $query->where('state', 'not_started')
                      ->orWhere('state', 'in_progress');
            })
            ->count();
        $endedChallenges = Challenge::where('user_id', $userId)
            ->where(function($query){
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