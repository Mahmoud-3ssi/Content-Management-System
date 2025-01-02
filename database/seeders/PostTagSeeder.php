<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $tags = Tag::pluck('id')->toArray();

        foreach ($posts as $post) {
            // note: array_rand returns keys not values  
            $randKeys = array_rand($tags, rand(2, 5));
            $randValues = [];

            foreach ($randKeys as $key)
                $randValues[] = $tags[$key];

            $post->tags()->attach($randValues);
        }
    }
}
