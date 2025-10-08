<?php

namespace App\Http\Controllers;
use Aoo\Models\Challenge;
use App\Services\ChallengeService;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $challengeService;
    public function __construct(ChallengeService $challengeService)
    {
        $this->challengeService = $challengeService;
    }
    public function preview()
    {
        $ongoingChallenges = $this->challengeService->getUserOngoingChallenges(auth()->id(), 20, true);
        $endedChallenges = $this->challengeService->getUserEndedChallenges(auth()->id(), 20, true);
        return response()->json([
            'ongoingChallenges' => $ongoingChallenges,
            'endedChallenges' => $endedChallenges,
        ]);
    }
    public function index()
    {
        $allChallenges = $this->challengeService->getUserChallenges(auth()->id(), 20, true);
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
        $validated = $request->validate([
            'title' => 'required|string|max:15',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            //ここpush前に直す
        ]);
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
