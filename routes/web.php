<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest();

    if(request("search")){
        $posts
            ->where("title","like","%".request("search")."%")
            ->orWhere("body","like","%".request("search")."%");
    }

    return view('welcome', [
        "posts" => $posts->get(),
        "categories" => Category::all()
    ]);
})->name("home");

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        "post"=>$post
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('welcome', [
        "posts"=>$category->posts,
        "categories" => Category::all(),
        "currentCategory" => $category->slug
    ]);
})->name("category");

Route::get('/author/posts/{author:username}', function (User $author) {
    return view('welcome', [
        "posts"=>$author->posts,
        "categories" => Category::all()
    ]);
});
