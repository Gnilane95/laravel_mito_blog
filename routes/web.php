<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ListOfCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PostController::class, 'index'])->name("home");
Route::resource('posts', PostController::class);

// Comments
Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment.store');

//Category


// Group of routes

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::get('/', function () {
    return view('dashboard');
    })->name('dashboard');
    // Category
    Route::get('list-category',[ListOfCategoryController::class, 'index'])->name('categories.home');
    Route::post('/category', [ListOfCategoryController::class, 'store'])->name('category.store');
    // post
    Route::get('/all-posts', [PostController::class, 'allPosts'])->name('posts.all');
    Route::get('/all-users', [UserController::class, 'allUsers'])->name('users.all');

    //delete image post
    Route::get('/posts/remove-img/{id}',[PostController::class, 'removeImg'])->name('delete.img');
    // delete category
    

});

require __DIR__.'/auth.php';
