<?php
use Illuminate\Support\Facades\Route;

Route::get('/change-locale/{locale}', 'main\HomeController@locale')->name('change-locale');

Route::get('/', 'frontend\HomeController@index')->name('home');

Route::get('/contact', 'frontend\HomeController@contact')->name('contact');

Route::get('/category/{urlCat}', 'frontend\CategoryController@index')->name('category-product');

Route::post('/search', 'frontend\CategoryController@search')->name('search-product');

Route::get('/product/{urlProduct}', 'frontend\ProductController@detailProduct')->name('detail-product');

Route::get('/blog/{idCat}', 'frontend\PostController@blog')->name('blog');

Route::get('/post/{urlPost}', 'frontend\PostController@post')->name('post');

Route::get('/cart-add/{idProduct}/{quantity}', 'frontend\CartController@add')->name('cart-add');

Route::get('/cart-remove-item/{idProduct}', 'frontend\CartController@removeItem')->name('cart-remove-item');

Route::get('/cart-checkout', 'frontend\CartController@checkout')->name('cart-checkout');

Route::post('/cart-payment', 'frontend\CartController@payment')->name('cart-payment');

Route::get('/cart-completed', 'frontend\CartController@completed')->name('cart-completed');




// Route::get('/portfolio', 'portfolio\PortfolioAboutMeController@index')->name('main-portfolio-about-me');

//http://www.creativethemes.co.in/buy-creativetheme-html-template/organicfood-store/image-html/html/home-v3.html
//https://mironmahmud.com/greeny/assets/ltr/blog-grid.html
//https://s.lazada.vn/s.cvgLB?zdlink=Uo9XRcHoRsba8ZeYOszjBcnXUc5aOIvXRcHoRsba8YmYQMzp8Zfx8dDZQ6LjPLzrScmYEY9wOMnlBJSuDJCuDJ4qDpfSBrml8YmYON1mQMGYEY8tE3KpE3KnD3SYVNq
