<?php
use Illuminate\Support\Facades\Route;

// ======================= Dashboard =======================

Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

// truyền dữ liệu vào biến $title ở tiêu đề trang <title>
// Link dẫn dùng pages.dashboard hoặc pages/dashboard
// return view('pages/dashboard', ['title' => 'Welcome to Laravel Admin - Light Bootstrap Dashboard']);

// ======================= Categories =======================

Route::get('/category-list', 'Admin\CategoryController@index')->name('category-index');

Route::get('/category-list-deteled', 'Admin\CategoryController@listDeteled')->name('category-list-deteled');

Route::get('/category/{urlCat}', 'Admin\CategoryController@detail')->name('category-detail');

Route::get('/category-insert', 'Admin\CategoryController@categoryInsert')->name('category-insert');

Route::get('/category-update/{idCat}', 'Admin\CategoryController@categoryUpdate')->name('category-update');

Route::post('/category-insert-update/{idCat}', 'Admin\CategoryController@categoryInsertUpdate')->name('category-insert-update');

Route::get('/category-delete/{idCat}', 'Admin\CategoryController@categoryDelete')->name('category-delete');

Route::get('/category-return/{idCat}', 'Admin\CategoryController@categoryReturn')->name('category-return');

// ======================= Posts =======================

Route::get('/post-list', 'Admin\PostController@index')->name('post-index');

Route::post('/posts-change-category-ajax', 'Admin\PostController@changeCategoryAjax')->name('posts-change-category-ajax');

Route::get('/post-insert', 'Admin\PostController@postInsert')->name('post-insert');

Route::get('/post-update/{urlPost}', 'Admin\PostController@postUpdate')->name('post-update');

Route::post('/post-insert-update/{idPost}', 'Admin\PostController@postInsertUpdate')->name('post-insert-update');

// Route::post('/posts-updated/{idDetailPost}', 'Admin\PostController@update')->name('posts-update');

Route::get('/posts-delete', 'Admin\PostController@indexDelete')->name('posts-list-delete');

Route::post('/posts-delete', 'Admin\PostController@deleteManyPost')->name('posts-delete-many-posts');

Route::get('/posts-delete/{idDetailPost}', 'Admin\PostController@deletePost')->name('posts-delete-post');

Route::post('/posts-many-image', 'Admin\PostController@updateManyImage')->name('posts-many-image');

// ======================= Product =======================

Route::get('/product-list', 'Admin\ProductController@index')->name('product-index');

Route::get('/product-insert', 'Admin\ProductController@productInsert')->name('product-insert');

Route::get('/product-update/{idProduct}', 'Admin\ProductController@productUpdate')->name('product-update');

Route::post('/product-insert-update/{idProduct}', 'Admin\ProductController@productInsertUpdate')->name('product-insert-update');

// Route::match(['GET', 'POST'], '/product-insert-update/{id?}', 'Admin\ProductController@productInsertUpdate')->name('product-insert-update');

Route::get('/product-delete/{id}', 'Admin\ProductController@productDelete')->name('product-delete');

// ======================= Booking =======================

Route::get('/booking-list', 'Admin\BookingController@index')->name('booking-index');

Route::get('/booking-detail/{idBooking}', 'Admin\BookingController@detail')->name('booking-detail');

// ======================= Channels =======================

Route::get('/channels', 'Admin\ChannelController@index')->name('channels-index');

// ======================= Sites =======================

Route::get('/sites', 'Admin\SiteController@indexList')->name('sites');

Route::post('/sites-search', 'Admin\SiteController@search')->name('sites-search');

Route::get('/sites-insert', 'Admin\SiteController@indexInsert')->name('sites-insert');

Route::post('/sites-insert', 'Admin\SiteController@insert')->name('sites-insert');

Route::get('/sites-update/{idSite}', 'Admin\SiteController@indexUpdate')->name('sites-list-update');

Route::post('/sites-update/', 'Admin\SiteController@update')->name('sites-update');

Route::get('/sites-delete/{idSite}', 'Admin\SiteController@delete')->name('sites-delete');

// ======================= Download =======================

Route::get('/download', 'Admin\DownloadController@indexList')->name('download');

Route::post('/download-search', 'Admin\DownloadController@search')->name('download-search');

Route::get('/download-insert', 'Admin\DownloadController@indexInsert')->name('download-insert');

Route::post('/download-insert', 'Admin\DownloadController@insert')->name('download-insert');

Route::get('/download-update/{idDown}', 'Admin\DownloadController@indexUpdate')->name('download-list-update');

Route::post('/download-update/', 'Admin\DownloadController@update')->name('download-update');

Route::get('/download-delete/{idDown}', 'Admin\DownloadController@delete')->name('download-delete');

// ======================= User Profile =======================

Route::get('/user-profile', 'Admin\ProfileController@index')->name('user-profile');

Route::post('/user-profile-update', 'Admin\ProfileController@update')->name('user-profile-update');

Route::get('/user-profile-print-pdf/{id}', 'Admin\ProfileController@printPDFProfile')->name('user-profile-print-pdf');

// Route::match(['GET', 'POST'], '/user-profile', 'Admin\ProfileController@profileUpdate')->name('user-profile');

// ======================= API Social Network =======================

Route::get('/api-social-network', 'Admin\APISocialNetworkController@index')->name('api-social-network-index');

Route::post('/api-social-network-twitter', 'Admin\APISocialNetworkController@updateTwitter')->name('api-social-network-twitter');

// ======================= Security =======================

Route::get('/security', 'Admin\SecurityController@index')->name('security');

Route::post('/security-update', 'Admin\SecurityController@update')->name('security-update');

// ======================= Administrator =======================

Route::get('/administrator', 'Admin\AdministratorController@index')->name('administrator');
