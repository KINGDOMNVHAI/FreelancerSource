<?php

/* **************************** FRONTEND PAGE **************************** */

require 'fefood.php';

/* **************************** AUTH PAGE **************************** */

require 'auth.php';

/* **************************** BACKEND PAGE **************************** */

require 'backend.php';

// ======================= Home Page =======================

// Route::get('/', 'feHotel\HomeController@index');

// Route::get('/about-us', 'feHotel\HomeController@about')->name('about-us');

Route::get('', [\App\Http\Controllers\feHotel\HomeController::class, 'index'])->name('hotel-home');
