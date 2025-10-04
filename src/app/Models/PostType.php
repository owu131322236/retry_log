<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function reactionTypes()
    {
        return $this->hasMany(ReactionType::class);
    }
}
