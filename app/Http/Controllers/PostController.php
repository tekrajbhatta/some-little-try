<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request,Post $post)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ], [
            'title.required' => 'Title field is required.',
            'body.required' => 'Body field is required.'
        ]);
        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        // dd("test");
        // die;
        return redirect('/dashboard')->with('message', 'Post created successfully!');
        // return redirect()->route('/home')->with('success','Company Has Been updated successfully');
        // return redirect('/home')->with('success','Post created successfully!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        // echo "Test Test Test";
        // dd($post);
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);

        // $post = Post::findOrFail($id);
        // dd($post);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/dashboard')->with('message','Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/dashboard')->with('message', 'Post deleted successfully!');
    }
}