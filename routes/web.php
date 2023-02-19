<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::resource('post', PostController::class)->except(['index']);

// Route::name('posts.')->prefix('posts')->group(function () {

//   Route::get('/create', function () {
//   })->name('create');

//   Route::post('/', function (Request $request) {

//   })->name('store');

// });
