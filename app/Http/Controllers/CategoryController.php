<?php

namespace App;
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories|max:255',
        ]);

        Category::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate(
            ['title' => 'required|unique:categories|max:255'],
        );

        $category->update([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
