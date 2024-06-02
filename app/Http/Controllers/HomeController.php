<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{   
    public function index()
    {
        $wordstextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'wordstext');
        })->orderBy('created_at', 'desc')->get();
    
        $longtextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'longtext');
        })->orderBy('created_at', 'desc')->get();
    
        $paidtextPosts = Post::whereHas('category', function ($query) {
            $query->where('name', 'paidtext');
        })->orderBy('created_at', 'desc')->get();
    
        return view('posts.index', compact('wordstextPosts', 'longtextPosts', 'paidtextPosts'));
    }
    
}
