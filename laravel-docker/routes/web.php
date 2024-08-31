<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;   //Added this to allow forceRoot URL to get from .env APP_URL

$url = config('app.url');
URL::forceRootUrl($url);  //Added this to allow forceRoot URL to get from .env APP_URL

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');