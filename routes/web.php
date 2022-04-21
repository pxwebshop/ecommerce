<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', 'Front\HomeController@changeLanguage')->name('user.change-language');

    Route::get('/', 'Front\HomeController@index')->name("home");

    // account
    Route::get('/register', 'Front\UserController@register')->name('register');
    Route::post('/register', 'Front\UserController@postRegister');
    Route::get('/login', 'Front\UserController@login')->name("login");
    Route::post('/login', 'Front\UserController@postLogin');
    
    Route::group(['prefix' => 'user'], function () {
        Route::get('/logout', 'Front\UserController@logout');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'Front\ProductController@index');
        Route::get('/detail', 'Front\ProductController@detail');
    });
    
    Route::get('/cart', 'Front\CartController@index');
    Route::get('/wishlist', 'Front\WishlistController@index');
    Route::get('/checkout', 'Front\CheckoutController@index');
    Route::get('/contact', 'Front\ContactController@index');

    Route::get('/component', function () {
        return view('component');
    });
});
