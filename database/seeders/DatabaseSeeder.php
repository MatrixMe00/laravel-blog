<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $max_users = 10;
        $max_posts_per_user = 10;
        $categories = Category::createCategories(10);

        $create_users = rand(1, $max_users);

        for($i = 1; $i <= $create_users; $i++){
            $user = User::factory()->create();
            $posts = rand(1, $max_posts_per_user);

            for($j=1; $j <= $posts; $j++){
                Post::factory()->create([
                    "user_id" => $user->id,
                    "category_id" => $categories[rand(0, 9)]->id
                ]);
            }
        }

        /*$user = User::factory()->create([
            "name" => "John Doe",
            "username" => "jonDoe",
        ]);

        Post::factory(5)->create([
            "user_id" => $user->id
        ]);*/
        // Post::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
