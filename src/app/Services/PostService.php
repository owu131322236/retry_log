<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    private function baseQuery()
    {
        return Post::with([
            'user:id,name,image', 
            'reactions',          
            'comments',           
        ])
            ->withCount(['reactions', 'comments']) 
            ->select('id', 'user_id', 'content', 'updated_at', 'created_at', 'post_type_id');
    }
    public function getTimelinePosts(int $limit = 20)
    {
        return $this->baseQuery()
            ->latest('updated_at')
            ->take($limit)
            ->cursorPaginate($limit);
    }
    public function getUserPosts(int $userId, int $limit = 20)
    {
        return $this->baseQuery()
            ->where('user_id', $userId)
            ->latest('updated_at')
            ->take($limit)
            ->cursorPaginate($limit);
    }
    public function getReactionPosts(int $userId, int $limit = 20)
    {
        return $this->baseQuery()
            ->whereHas('reactions', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->latest('updated_at')
            ->take($limit)
            ->cursorPaginate($limit);
    }
}
