<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

$url = config('app.url');
URL::forceRootUrl($url);

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');