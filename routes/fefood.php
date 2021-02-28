<?php

use Illuminate\Support\Facades\Route;

// ======================= Home Page =======================

Route::get('/','FEFood\HomeController@index')->name('home');


// Route::get('/{any}', function () {
//     return view('post');
//   })->where('any', '.*');

Route::get('/about','FEFood\HomeController@about')->name('about');

Route::get('/contact','FEFood\HomeController@contact')->name('contact');

Route::get('/blog','FEFood\PostController@blog')->name('blog');

Route::get('/post/{urlPost}','FEFood\PostController@post')->name('post');
