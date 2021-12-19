<?php

use App\Http\Controllers\Public\ContactController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// GUEST
Route::get('/', function () {
    return view('public.home', ['posts' => Post::all()]);
})->name('home');
Route::get('/about', function () {
    return view('public.about');
})->name('about');
Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

// GUEST POST DETAIL
Route::get('post/{post:slug}', function (Post $post) {
    return view('public.post')->with(['post' => $post]);
})->name('post');

// GUEST CONTACT
Route::post('/contact', [ContactController::class, 'sendMeMessage'])->name('contact-send');

// ADMIN
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::get('/admin', function () {
    return redirect(route('admin.home'));
});
// Route::redirect('/admin', route('admin.home'));
Auth::routes();
