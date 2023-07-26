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
        //truncate tables to prevent repetition
        User::truncate();
        Post::truncate();
        Category::truncate();

        //create a user
        $user = User::factory()->create();

        //create categories
        $personal = Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        $work = Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        $hobby = Category::create([
            "name" => "Hobby",
            "slug" => "hobby"
        ]);

        //create posts
        Post::create([
            "user_id"=>$user->id,
            "title"=>"My Personal Post",
            "slug"=>"my-personal-post",
            "category_id"=>$personal->id,
            "excerpt"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>",
            "body"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi a, iure et eum magni officia illum voluptates autem est facere dolores rerum eligendi qui blanditiis similique reiciendis? Aut, vel cumque.</p>"
        ]);

        Post::create([
            "user_id"=>$user->id,
            "title"=>"My Work Post",
            "slug"=>"my-work-post",
            "category_id"=>$work->id,
            "excerpt"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>",
            "body"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi a, iure et eum magni officia illum voluptates autem est facere dolores rerum eligendi qui blanditiis similique reiciendis? Aut, vel cumque.</p>"
        ]);

        Post::create([
            "user_id"=>$user->id,
            "title"=>"My Hobby Post",
            "slug"=>"my-hobby-post",
            "category_id"=>$hobby->id,
            "excerpt"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>",
            "body"=>"<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi a, iure et eum magni officia illum voluptates autem est facere dolores rerum eligendi qui blanditiis similique reiciendis? Aut, vel cumque.</p>"
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
