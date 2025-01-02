<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
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
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);

        User::factory(20)->create();

        Post::factory(100)->create();

        Tag::factory(30)->create();

        $this->call(PostTagSeeder::class);

        $this->call(CommentSeeder::class);
    }
}
