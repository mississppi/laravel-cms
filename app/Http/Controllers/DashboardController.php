<?php

namespace App;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('dashboard.index', compact('posts'));
    }

    
}
