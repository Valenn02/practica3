<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * Get the comments for the blog post.
     *   
     * Syntax: return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
     *
     * Example: return $this->hasMany(Comment::class, 'post_id', 'id');
     * 
     */
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
