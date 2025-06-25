<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author();
        $author->username = 'Prateek';
        $author->password='par123';
        $author->save();
    }

    //show author based on the post id that they have posted
    public function get_author($id)
    {
        $author = Post::find($id)->author;
        // dd($author);
        return $author->username;
    }
}
