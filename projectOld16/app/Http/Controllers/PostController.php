<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function showPost()
    {
        return view('post.blogpost');
    }
}
