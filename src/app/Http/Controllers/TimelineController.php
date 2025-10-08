<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Services\PostService;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $userService;
    protected $postService;
    public function __construct(PostService $postService, UserService $userService)
    {
        $this->userService = $userService;
        $this->postService = $postService;
    }
    public function index()
    {
        $user = $this->userService->getUserProfile(auth()->id());
        $timeline = $this->postService->getTimelinePosts(auth()->id(), 20);
        return response()->json([
            'user' => $user,
            'timeline' => $timeline,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
