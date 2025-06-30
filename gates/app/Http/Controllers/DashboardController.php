<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class DashboardController extends Controller
{
    public function showPost(Request $request)
    {
        $userid = $request->user()->id;
        $post = Post::where('user_id', $userid)->latest()->paginate(5);
        return view('dashboard', ['posts'=>$post]);
    }
}
