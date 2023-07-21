<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title; public $excerpt; public $date; public $body; public $url;

    public function __construct($title, $excerpt, $date, $body, $url)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->url = $url;
    }

    public static function find($post_name)
    {
        $posts = static::all();

        return $posts->firstWhere("url", $post_name);
    }
    
    public static function all(){
        $files = File::files(resource_path("views/posts/"));
        return collect($files)
            ->map(function($file){
                $document = YamlFrontMatter::parseFile($file);
                return new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->url
                );
        });
    }
}
