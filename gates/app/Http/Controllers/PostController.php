<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->user();
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;

        $user->post()->save($post);

        //add redirecting route for url
        return to_route('post-index')->with('message', 'You have added a new post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //fetch the edit form details
        $posts = Post::find($id);
        if(Gate::denies('isAdmin', $posts))
        {
            abort(403, 'You are not authorized to edit this post');
        }
        return view('editpost', ['post'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post= Post::find($id);
        if(Gate::denies('isAdmin', $posts))
        {
            abort(403, 'You are not authorized to update this post');
        }
        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return to_route('post-index')->with('message', 'You have updated your post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Gate::denies('isAdmin', $posts))
        {
            abort(403, 'You are not authorized to delete this post');
        }
        Post::destroy($id);
        return to_route('dashboard')->with('message', 'You have deleted your post');
    }
}
