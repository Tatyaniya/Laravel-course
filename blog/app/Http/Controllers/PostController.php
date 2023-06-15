<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $posts = Post::all();
      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();

      return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts)
    {
      return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $posts)
    {
      return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $posts)
    {
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();

      return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $posts)
    {
      $post->delete();
      return redirect('/posts');
    }
}