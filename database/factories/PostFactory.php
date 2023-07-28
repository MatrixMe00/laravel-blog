<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
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
        $title = $this->faker->sentence;

        return [
            "user_id" => User::factory(),
            "category_id" => Category::factory(),
            "title" => $title,
            "slug" => Post::createSlug($title),
            "excerpt" => "<p>".implode("</p><p>", $this->faker->paragraphs(2))."</p>",
            "body" => "<p>".implode("</p><p>", $this->faker->paragraphs(6))."</p>"
        ];
    }
}
