<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// GUEST
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

Route::get('post/{post:slug}', function (Post $post) {
    return view('public.post', $post);
})->name('post');



// ADMIN
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();
