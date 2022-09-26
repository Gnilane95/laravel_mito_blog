<?php

use App\Http\Controllers\Testcontroller;
use Illuminate\Support\Facades\Route;
Route::get('/', [Testcontroller::class, 'index'])->name("Home");
Route::get('about', function () {
    return view('pages.about');
})->name("A propos");
