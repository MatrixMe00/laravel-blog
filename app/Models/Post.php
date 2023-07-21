<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function find($post_name)
    {
        if(!file_exists($path = resource_path("views/posts/{$post_name}.html"))){
            throw new ModelNotFoundException();
        }
    
        return cache()->remember("post.{post}", now()->addWeek(), fn() => file_get_contents($path));
    }
    
    public static function all(){
        $files = File::files(resource_path("views/posts/"));

        return array_map(function($file){
            return $file->getContents();
        }, $files);
    }
}
