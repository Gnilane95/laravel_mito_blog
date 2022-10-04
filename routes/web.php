<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PostController::class, 'index'])->name("home");
Route::resource('posts', PostController::class);
Route::get('/all-posts', [PostController::class, 'allPosts'])->name('posts.all');
Route::get('/all-users', [UserController::class, 'allUsers'])->name('users.all');

//delete image post
Route::get('/posts/remove-img/{id}',[PostController::class, 'removeImg'])->name('delete.img');

Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
