<?php

namespace App\Services;

use App\Enums\ChallengeState;
use App\Models\ChallengeLog;
use App\Models\Challenge;
use Carbon\Carbon;

class ChallengeService
{
    public function getUserChallenges($userId)
    {   
        return Challenge::with(['challengeLogs', 'challengeLogs.challengeStatus'])
            ->where('user_id', $userId)
            ->latest();
    }
    public function getUserOngoingChallenges(int $userId, int $limit = 20, $usePaginate = false)
    {
            $query = $this->getUserChallenges($userId)
                    ->whereIn('state', ['not_started', 'in_progress'])
                    ->withCount(['challengeLogs as is_recorded_today' => function ($q) {
                        $q->whereDate('logged_at', Carbon::today());
                    }])
                    ->orderBy('is_recorded_today','asc')//昇順
                    ->distinct(); 
            return $usePaginate 
                ? $query->take($limit)->cursorPaginate($limit) 
                : $query->take($limit)->get();
    }
    public function getChallengesContext(Challenge $challenge)
    {
        $isRecoredToday = $challenge->challengeLogs()
            ->whereDate('logged_at', Carbon::today())
            ->exists();
        return [
            'isRecoredToday' => $isRecoredToday,
        ];
        
    }
    public function getUserEndedChallenges(int $userId, int $limit = 20, $usePaginate = false)
    {
        $query = $this->getUserChallenges($userId)
            ->whereIn('state', ['failed', 'interrupted', 'completed']);
            return $usePaginate 
                ? $query->cursorPaginate($limit) 
                : $query->take($limit)->get();
    }


    //Challengeの達成率を計算するメソッド
    public function calculateAcheivementRate(Challenge $challenge){
        $today = Carbon::today();
        $start = $challenge->start_date;
        $logs = ChallengeLog::with('challengeStatus')
            ->where('challenge_id', $challenge->id)
            ->whereBetween('logged_at', [$start, $today])
            ->get();
            $expectedTotal = match ($challenge->frequency_type) {
                'daily' => $start->diffInDays($today) + 1,
                'weekly' => ceil(($start->diffInDays($today) + 1) / 7),
                'monthly' => ceil(($start->diffInDays($today) + 1) / 30),
                default => 0,
            };
            $expectedTotal *= ($challenge->frequency_goal ?? 1);
            $successCount = $logs->filter(function($log){
                return $log->challengeStatus->name === 'success';
            })->count();
            $achievementRate = $expectedTotal > 0 ? $successCount / $expectedTotal : 0;
            return $achievementRate;
    }
    public function calculateChallengeState(Challenge $challenge)
    {
        $now = Carbon::now();
        if ($challenge->status === ChallengeState::INTERRUPTED) {
            return ChallengeState::INTERRUPTED;
        }
        if ($challenge->start_date->gt($now)) {
            return ChallengeState::NOT_STARTED;
        }
        if ($challenge->end_date->lt($now)) {
            $rate = $this->calculateAcheivementRate($challenge);
            return $rate >= 0.7
                ? ChallengeState::COMPLETED
                : ChallengeState::FAILED;
        }
        return ChallengeState::IN_PROGRESS;
    }
}
