<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        //新しく追加したフィールド
        'image',
        'bio',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'points' =>'integer',
        ];
    }

    public function challenges()
    {
        return $this->hasMany(Challenge::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'recipient_user_id');
    }

    public function followings() //followしている人
    {
        return $this->belongsToMany(
            User::class,
            'follows',   //中間テーブル名   
            'follower_id',  // このUserのIDが入るカラム
            'followee_id'   // 相手のUserのIDが入るカラム
        );
    }

    public function followers()//followされている人
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'followee_id',  // このUserのIDが入るカラム
            'follower_id'  // 相手のUserのIDが入るカラム
        );
    }
}
