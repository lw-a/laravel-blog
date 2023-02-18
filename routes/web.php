<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
  return view('about');
})->name('about');

Route::name('posts.')->prefix('posts')->group(function () {

  Route::get('/create', function () {
    return view('posts.create');
  })->name('create');

  Route::post('/', function (Request $request) {
    $request->validate([
      'title' => 'required',
      'description' => ['required', 'min:10'],
    ]);

    return redirect()
    ->route('create')
    ->with('success', 'Post submitted! Title: ' .
    $request->input('title') . ' Description: ' .
    $request->input('description'));
  })->name('store');

});
