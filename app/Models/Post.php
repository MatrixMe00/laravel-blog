<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ["category","author"];

    public static function createSlug($title_value){
        if(empty($title_value)){
            throw new Exception("Your title is empty");
        }
        return strtolower(str_replace(" ","-",$title_value));
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters["search"] ?? false, function($query, $search){
            $query
                ->where("title","like","%".$search."%")
                ->orWhere("body","like","%".$search."%");
        });

        $query->when($filters["category"] ?? false, function($query, $category){
            $query->whereHas("category", fn($query) =>
                $query->where("slug", $category)
            );
        });
    }
}
