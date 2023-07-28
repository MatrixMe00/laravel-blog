<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "posts" => Post::latest()->filter(request(["search"]))->get(),
            "categories" => Category::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "post"=>$post
        ]);
    }

    public function category(Category $category){
        return view('welcome', [
            "posts"=>$category->posts,
            "categories" => Category::all(),
            "currentCategory" => $category->slug
        ]);
    }
}
