<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;   //Added this to allow forceRoot URL to get from .env APP_URL
//https://github.com/laravel/framework/issues/18613#issuecomment-703707939

$url = config('app.url');
URL::forceRootUrl($url);  //Added this to allow forceRoot URL to get from .env APP_URL

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 