<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->unique()->sentence();
        $auther_id = User::pluck('id');
        $category_id = Category::pluck('id');
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(15),
            'auther_id' => fake()->randomElement($auther_id),
            'category_id' => fake()->randomElement($category_id),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
