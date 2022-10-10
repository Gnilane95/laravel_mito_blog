<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    /**
    * Get the post that owns the category.
    */
    public function post()
    {
    return $this->belongsTo(Post::class);
    }
}
