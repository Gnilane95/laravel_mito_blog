<?php

namespace App\Models;

use App\Models\Images;
use App\Models\Comment;
use App\Models\featuredImage;
use App\Models\ListOfCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function featuredImage()
    {
        return $this->hasOne(featuredImage::class);
    }
    public function images()
    {
        return $this->hasMany(Images::class);
    }

    /**
    * Get the category associated with post.
    */
    public function category()
    {
    return $this->hasOne(Category::class);
    }
}
