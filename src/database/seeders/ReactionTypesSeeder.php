<?php

namespace Database\Seeders;

use App\Models\ReactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReactionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postTypes = DB::table('post_types')->pluck('id', 'name');

        $reaction_types = [
            ['post_type' => 'fail', 'emoji' => '✨', 'is_active' => true, 'is_special' => false, 'point_cost' => 0],
            ['post_type' => 'fail', 'emoji' => '😂', 'is_active' => true, 'is_special' => false,  'point_cost' => 0],
            ['post_type' => 'fail', 'emoji' => '😭', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
            ['post_type' => 'fail', 'emoji' => '🍵', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
            ['post_type' => 'success', 'emoji' => '✨', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
            ['post_type' => 'success', 'emoji' => '💯', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
            ['post_type' => 'success', 'emoji' => '😊', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
            ['post_type' => 'success', 'emoji' => '🔥', 'is_special' => false, 'is_active' => true, 'point_cost' => 0],
        ];
        foreach ($reaction_types as $reaction_type) {
            ReactionType::firstOrCreate(
                [
                    'post_type_id' => $postTypes[$reaction_type['post_type']],
                    'emoji' => $reaction_type['emoji'],
                ],
                [
                    'is_active' => $reaction_type['is_active'],
                    'is_special' => $reaction_type['is_special'],
                    'point_cost' => $reaction_type['point_cost'],
                ],
            );
        }
    }
}
