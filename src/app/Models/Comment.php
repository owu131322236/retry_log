<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    protected static function booted()
    {
        static::creating(function ($comment) {
            if (Auth::check()) {
                $comment->user_id = auth()->id();
            }
        });
        static::created(function ($comment) {
            // $comment が作成されたとき
            $comment->post()->increment('comments_count');
        });

        static::deleted(function ($comment) {
            // $comment が削除されたとき
            $comment->post()->decrement('comments_count');
        });
    }

    public function user() //コメントを書いた人用
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //カラムにはparent_comment_idのみがあるが、使い方によってはコメントを一気に取得できる
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }
    //リアクションの一覧画面
    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'target');
    }
    //リアクションの合計数のリアクション
    public function reactionCounts()
    {
        return $this->morphMany(ReactionCount::class,'target');
    }
}
