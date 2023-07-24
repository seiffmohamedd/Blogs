<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;


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
           //
           'user_id'=> User::factory(),
           'category_id'=> Category::factory(),
           'slug' => fake()->slug(),
           'title' => fake()->sentence(),
           'excerpt' => fake()->unique()->sentence(),
           'body' => fake()->paragraph(),
        ];
    }
}
