<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'frequency_type',
        'frequency_goal',
    ];

    protected $casts = [
        'frequency_type' => \App\Enums\ChallengeFrequency::class,
        'state' => \App\Enums\ChallengeState::class,
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    protected static function booted()
    {
        static::creating(function ($challenge) {
            if (empty($challenge->user_id) && auth()->check()) {
                $challenge->user_id = auth()->id();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function challengeLogs()
    {
        return $this->hasMany(ChallengeLog::class);
    }
    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'target');
    }
}
