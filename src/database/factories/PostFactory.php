<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'challenge_log_id' =>\App\Models\ChallengeLog::factory(),
            'content' => $this->faker->paragraph(),
            'comments_count' => 0,
            'post_type' => \App\Models\PostType::inRandomOrder()->first()->id,
        ];
    }
}
