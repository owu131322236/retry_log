<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReactionType extends Model
{
    use HasFactory;

    protected $casts = [
        'is_active' => 'boolean',
        'is_special' => 'boolean',
        'point_cost' => 'integer',
    ];
    public $timestamps = false;
    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }
    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
// スコープ関数---------------------------------------------------------------
    public function scopeCommon($query)
    {
        return $query->whereNull('post_type_id');
    }

    public function scopeForPostType($query, $postTypeId)
    {
        return $query->where('post_type_id', $postTypeId);
    }
}
