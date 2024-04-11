<?php
use Illuminate\Support\Facades\Route;

Route::get('/change-locale/{locale}', 'auth\LoginController@locale')->name('change-locale');

// ======================= Login, Logout, Register, Forgot =======================

Route::get('/login','auth\LoginController@index')->name('login');

Route::post('/check-login','auth\LoginController@login')->name('check-login');

Route::get('/register', 'auth\RegisterController@index')->name('main-register');

Route::post('/register-insert', 'auth\RegisterController@create')->name('register-insert');

Route::get('/register-google','auth\RegisterController@registerGoogle')->name('register-google');

Route::get('/forgot-password', 'auth\ForgotPasswordController@index')->name('forgot-password');

Route::post('/forgot-password-sendcode', 'auth\ForgotPasswordController@sendcode')->name('forgot-password-sendcode');

Route::get('/logout', 'auth\LoginController@logout')->name('logout');

Route::get('/thank-you-register','auth\RegisterController@registerThankYou')->name('thank-you-register');
