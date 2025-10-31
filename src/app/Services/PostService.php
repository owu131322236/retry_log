<?php

namespace App\Services;

use App\Models\Post;
use App\Services\ReactionService;

class PostService
{
    private function baseQuery()
    {
        return Post::with([
            'user:id,name,icon_id,background_id', 
            'reactions',          
            'comments',  
            'reactionCounts.reactionType', 
            'userReaction.reactionType',
            'postType',
            'postType.reactionTypes'         
        ])
            ->withCount(['reactions', 'comments']) 
            ->select('id', 'user_id', 'content', 'updated_at', 'created_at', 'post_type_id');
    }
    public function getTimelinePosts(string $postType, int $limit = 20)
    {
        return $this->baseQuery()
            ->whereHas('postType',function($query)use($postType){
                $query->where('name',$postType);
            })
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
    public function getPostDetail(int $postId)
    {
        return $this->baseQuery()
            ->latest()
            ->findOrFail($postId);
    }

    
}
