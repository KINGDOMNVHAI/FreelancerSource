<?php

use Illuminate\Support\Facades\Route;

// ======================= Home Page =======================

Route::get('/','frontend\HomeController@index')->name('home');


// Route::get('/{any}', function () {
//     return view('post');
//   })->where('any', '.*');

Route::get('/about','frontend\HomeController@about')->name('about');

Route::get('/contact','frontend\HomeController@contact')->name('contact');

Route::get('/blog','frontend\PostController@blog')->name('blog');

Route::get('/post/{urlPost}','frontend\PostController@post')->name('post');
