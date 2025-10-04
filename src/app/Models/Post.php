<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'content',
        'post_type_id'
    ];

    protected $casts = [
        'comments_count' => 'integer',
    ];

    protected $attributes = [
        'comments_count' => 0,
    ];

    protected static function booted() //作成時に自動でuser_idをセット
    {
        static::creating(function ($post) {
            if (Auth::check()) {
                $post->user_id = auth()->id();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function challengeLog()
    {
        return $this->belongsTo(ChallengeLog::class)->withDefault();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }
    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'target');
    }

    public function reactionCounts()
    {
        return $this->morphMany(ReactionCount::class,'target');
    }

    public function scopeType($query, int $postTypeId)
{
    return $query->where('post_type_id', $postTypeId);
}
}
