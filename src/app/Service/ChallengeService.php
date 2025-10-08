<?php

namespace App\Services;

use App\Models\Challenge;

class ChallengeService
{
    public function getUserChallenges($userId, $limit = 20)
    {
        return Challenge::with(['challengeLogs', 'challengeLogs.challengeStatus'])
            ->where('user_id', $userId)
            ->latest();
    }
    public function getUserOngoingChallenges(int $userId, int $limit = 20, $usePaginate = false)
    {
            $query = $this->getUserChallenges($userId)
                ->where(function($query){
                    $query->where('state', 'not_started')
                      ->orWhere('state', 'in_progress');
            });
            return $usePaginate 
                ? $query->take($limit)->cursorPaginate($limit) 
                : $query->get($limit);
    }
    public function getUserEndedChallenges(int $userId, int $limit = 20, $usePaginate = false)
    {
        $query = $this->getUserChallenges($userId)
            ->where(function($query){
                $query->where('state', 'failed')
                        ->orWhere('state', 'interrupted')
                        ->orWhere('state', 'completed');
            });
            return $usePaginate 
                ? $query->take($limit)->cursorPaginate($limit) 
                : $query->get($limit);
    }
}
