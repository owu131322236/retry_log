<?php

namespace Database\Seeders;
use App\Models\PostType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postTypes = [
            [ 'name' => 'success', 'is_active' => true],
            [ 'name' => 'fail', 'is_active' => true],
        ];

        foreach($postTypes as $postType){
            PostType::firstOrCreate(
                ['name' =>$postType['name']],
                ['is_active' =>$postType['is_active']],
            );
        }
    }
}
