<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
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

//現時点の
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {

// })

//ルート, コントローラ指定で、メソッドを指定。view指定の場合は resources/views/profile/edit.blade.php
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //post/create
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
    Route::post('/posts/edit', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/destroy',  [PostController::class, 'destroy'])->name('posts.destroy');
    
    //category
    Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.store');
});

//Post新規投稿画面
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

//Post編集画面
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

//Category新規投稿画面
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/posts/create', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
