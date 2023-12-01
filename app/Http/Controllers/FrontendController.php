<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('frontend.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // $posts = Post::all();
        return view('frontend.show', compact('post'));
    }
}
