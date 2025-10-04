<?php

namespace Database\Seeders;

use App\Models\ChallengeStatus;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //固定データ
        $this->call([
            ChallengeStatusesSeeder::class,
            PostTypesSeeder::class,
            ReactionTypesSeeder::class,
        ]);
        //ダミーデータ
        $this->call([
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            ReactionsTableSeeder::class,
            FollowsTableSeeder::class,
            ChallengesTableSeeder::class,
            NotificationsTableSeeder::class,
        ]);
    }
}
