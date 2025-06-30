<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::with('user')->latest()->paginate(8);
        return view('home', ['posts'=>$post]);
    }
}
