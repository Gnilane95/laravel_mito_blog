<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Testcontroller;
// Route::get('/', [Testcontroller::class, 'index'])->name("Home");
// Route::get('about',[Testcontroller::class, 'about'])->name("A propos");
Route::get('/',[PostController::class, 'index'])->name("Home");
// Route::get('about',[PostController::class, 'about'])->name("A propos");
Route::resource('posts', PostController::class);
