<?php

use Illuminate\Support\Facades\Route;

// ======================= Login, Logout, Register, Forgot =======================

Route::get('/login','auth\LoginController@login')->name('login');

Route::post('/check-login','auth\LoginController@checklogin')->name('check-login');

Route::get('/register','auth\LoginController@register')->name('register');
