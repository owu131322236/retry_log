<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Services\UserService;
use App\Services\PostService;
use App\Services\ChallengeService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $postService;
    protected $challengeService;
    public function __construct(UserService $userService, PostService $postService ,ChallengeService $challengeService)
    {
        $this->userService = $userService;
        $this->postService = $postService;
        $this->challengeService = $challengeService;
    }
    public function index()
    {
        $userId = auth()->id() ?? 1;
        $users = $this->userService->getUserProfile($userId);
        $posts = $this->postService->getUserPosts($userId, 20);
        $reactionPosts = $this->postService->getReactionPosts($userId, 20);
        $challneges = $this->challengeService->getUserOngoingChallenges($userId, 20, false);
        return response()->json([
            'users' => $users,
            'posts' => $posts,
            'reactionPosts' => $reactionPosts,
            'challneges' => $challneges,
        ]);
    }
}
