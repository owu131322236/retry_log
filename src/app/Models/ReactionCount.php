<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionCount extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'count' => 'integer',
        'target_id' =>'intenger'
    ];

    public function reactionType()
    {
        return $this->belongsTo(ReactionType::class);
    }
}
