<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Reaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Post::all()->each(function($post){
        Reaction::factory()->count(rand(0,10))->create([
            'target_type' => get_class($post),
            'target_id' =>$post->id
        ]);
    });
    Comment::all()->each(function($comment){
        Reaction::factory()->count(rand(0,10))->create([
            'target_type' =>get_class($comment),
            'target_id' => $comment->id,
        ]);
    });
    }
}
