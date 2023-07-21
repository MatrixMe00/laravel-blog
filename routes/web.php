<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('welcome', [
        "posts" => Post::all()
    ]);
});

Route::get('/post/{post}', function ($post_name) {
    return view('post', ["post"=>Post::find($post_name)]);
})->where("post","[A-z0-9_/-]+");