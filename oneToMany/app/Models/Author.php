<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Author extends Model
{
    use HasFactory;
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
