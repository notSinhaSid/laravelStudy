<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class IndexController extends Controller
{
    public function index($id)
    {
        $author = Author::find($id);
        // $post->author()->
        // var_dump($author->username);
        foreach($author->posts as $posted)
        {
            echo $posted->title;
            echo $posted->category;
            echo '<br>';
        }
    }
}
