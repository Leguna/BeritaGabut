<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('public.home', ['posts' => Post::all()]);
})->name('home');
Route::get('/about', function () {
    return '';
})->name('about');
Route::get('/contact', function () {
    return '';
})->name('contact');
Route::get('/sample', function () {
    return '';
})->name('sample');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');


// ADMIN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');


Auth::routes();
