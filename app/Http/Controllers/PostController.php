<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('dashboard.admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'category_id' => 'required',
            'user_id' => 'required'
        ]);

        $imageName = time().'.'.$request->photo->getClientOriginalName(); 

        $request->photo->move(public_path('images', 'posts'), $imageName);

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'photo' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id
        ]);

        return redirect('/posts')->with('status', 'Data Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
            'category_id' => 'required',
            'user_id' => 'required'
        ]);

        $imageName = time().'.'.$request->photo->getClientOriginalName(); 

        $request->photo->move(public_path('images', 'posts'), $imageName);

        Post::where('id', $post->id)
        ->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'photo' => $imageName,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id
        ]);

        return redirect('/posts')->with('status', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->forceDelete();
        return redirect('/posts')->with('status', 'Data Deleted!');
    }
}
