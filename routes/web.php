<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//ルート, コントローラ指定で、メソッドを指定。view指定の場合は resources/views/profile/edit.blade.php
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //post
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    

    //category
    Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.store');
});

//ルート、クラス指定、メソッド指定。viewも指定
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

//ルート、クラス指定、メソッド指定。viewも指定
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/posts/create', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
