<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Author;

class PostController extends Controller
{
    public function add_post($id)
    {
        $author = Author::find($id);

        $post = new Post();
        $post->title = "Python Course";
        $post->category = 'Python';
        $author->posts()->save($post);
    }

    //get post based on author id
    public function get_post($id)
    {
        $post = Author::find($id)->posts;

        // dd($post);
        return $post;
    }
}
