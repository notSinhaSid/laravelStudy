<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $this->authorize('isAdmin', Post::class);
        if(Auth::user()->cannot('isAdmin', Post::class))
        {
            abort(403,'You are going behind your rules');
        }

        //fetch the edit form details
        $posts = Post::find($id);
        return view('editpost', ['post'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('isAdmin', Post::class);
        

        $post= Post::find($id);
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
        $this->authorize('isAdmin', Post::class);
        
        Post::destroy($id);
        return to_route('dashboard')->with('message', 'You have deleted your post');
    }
}
