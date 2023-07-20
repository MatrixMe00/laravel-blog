<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/post/{post}', function ($post_name) {
    $path = __DIR__ ."/../resources/views/posts/{$post_name}.html";
    if(!file_exists($path)){
        abort(404);
    }

    $post = file_get_contents($path);
    return view('post', [
        "post"=>$post
    ]);
})->where("post","[A-z0-9_/-]+");