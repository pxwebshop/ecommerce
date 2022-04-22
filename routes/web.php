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
    //change language
    Route::get('change-language/{language}', 'Front\HomeController@changeLanguage')->name('user.change-language');
    
    //home
    Route::get('/', 'Front\HomeController@index')->name("home");

    // account
    Route::get('/register', 'Front\UserController@register')->name('register');
    Route::post('/register', 'Front\UserController@postRegister');
    Route::get('/login', 'Front\UserController@login')->name("login");
    Route::post('/login', 'Front\UserController@postLogin');
    
    //logout, change password
    Route::group(['prefix' => 'user'], function () {
        Route::get('/logout', 'Front\UserController@logout');
        Route::get('/change-password', 'Front\UserController@changePassword')->name('change-password');
        Route::post('/change-password', 'Front\UserController@changePasswordPost');
    });
    
    //reset password
    Route::get('/forgot-password', 'Front\UserController@forgotPassword')->name('forgot.password.get');
    Route::post('/forgot-password','Front\UserController@postForgotPassword')->name('forgot.password.post'); 
    Route::get('/reset-password/{token}', 'Front\UserController@resetPassword')->name('reset.password.get');
    Route::post('/reset-password', 'Front\UserController@postResetPassword')->name('reset.password.post');

    //
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'Front\ProductController@index');
        Route::get('/detail', 'Front\ProductController@detail');
    });
    
    //
    Route::get('/cart', 'Front\CartController@index');
    Route::get('/wishlist', 'Front\WishlistController@index');
    Route::get('/checkout', 'Front\CheckoutController@index');
    Route::get('/contact', 'Front\ContactController@index');

    //front end
    Route::get('/component', function () {
        return view('component');
    });
});
