<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\ReactionType;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Reaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reaction>
 */
class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $targetType = $this->faker->randomElement([Post::class, Comment::class]);
        $target = $targetType::inRandomOrder()->first();
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'reaction_type_id' => ReactionType::inRandomOrder()->first()->id ?? ReactionType::factory(),
            'target_type' => $targetType,
            'target_id' => $target->id, //ここがnullのReactionはありえない
        ];
    }
}
