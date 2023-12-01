<?php

namespace App;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'exists:categories:id',
            'status' => 'in:draft,published',
        ]);

        // dd($request);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('id'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'exists:categories:id',
            'status' => 'in:draft,published',
        ]);
        $id = $request->input('post_id');
        $post = Post::find($id);
        $post->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'category_id' => $request->input('id'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Post updated successfully');
    }

    public function destroy(Request $request, Post $post)
    {
        $id = $request->input('post_id');
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post deleted successfully');
    }
}
