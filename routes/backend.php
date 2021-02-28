<?php

use Illuminate\Support\Facades\Route;

// ======================= Logout =======================

Route::get('/logout','backend\PostController@logout')->name('logout');

// ======================= Admin Page =======================

Route::get('/list-post','backend\PostController@listpost')->name('list-post');

Route::match(['GET', 'POST'], '/create-post', 'backend\PostController@createpost')->name('create-post');

Route::get('/update/{url}','backend\PostController@update')->name('update');

Route::post('/edit/{url}','backend\PostController@edit')->name('edit');

Route::get('/delete/{url}','backend\PostController@delete')->name('delete');
