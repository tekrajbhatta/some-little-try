<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{   
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // return view('index', ['posts' => $posts]);

        $wordstextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'wordstext');
        })->get();
    
        $longtextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'longtext');
        })->get();
    
        $paidtextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'paidtext');
        })->get();

        return view('index', compact('wordstextPosts', 'longtextPosts', 'paidtextPosts'));
    }
}
