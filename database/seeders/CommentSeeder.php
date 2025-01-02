<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all()->toArray();

        foreach ($posts as $post) {

            $randUsers = array_rand($users, rand(2, count($users)));

            foreach ($randUsers as $user)
                $post->comments()->create([
                    'user_id' => $users[$user]['id'],
                    'content' => fake()->sentence(12),
                ]);
        }
    }
}
