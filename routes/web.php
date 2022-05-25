<?php

use App\Models\Wishlist;
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
    Route::get('/search', 'Front\HomeController@search')->name("search");
    Route::get('/search/name', 'Front\HomeController@autocomplete');

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

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('/all', 'Front\ProductController@all')->name('product.all');
        Route::get('/{category_id}', 'Front\ProductController@index')->name('filter');
        Route::get('/detail/{id}', 'Front\ProductController@detail');
    });

    //
    Route::get('/contact', 'Front\ContactController@index');

    
    Route::middleware(['auth'])->group(function(){
        Route::get('/checkout', 'Front\CheckoutController@index')->name('checkout');
        // order
        Route::post('/checkout', 'Front\CheckoutController@add')->name('order');
        
        Route::group(['prefix' => 'wishlist'], function () {
            Route::get('/', 'Front\WishlistController@index')->name('wishlist');
            Route::post('/', 'Front\WishlistController@add')->name('wishlist.add');
            Route::post('/delete', 'Front\WishlistController@delete')->name('wishlist.delete');
        });
    });

    //cart
    Route::get('/cart', 'Front\CartController@index')->name('cart');
    Route::get('/add-to-cart/{id}', 'Front\CartController@addToCart')->name('add.to.cart');
    Route::patch('/update-cart', 'Front\CartController@updateCart')->name('update.cart');
    Route::delete('/remove-from-cart', 'Front\CartController@removeCart')->name('remove.from.cart');


    //front end
    Route::get('/component', function () {
        return view('component');
    });


    // --- ADMIN --- //
    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'Admin\HomeController@index');
        Route::get('/user', 'Admin\HomeController@user')->name('user');
        Route::get('/user/edit/{id}', 'Admin\HomeController@userEdit')->name('user.edit');
        Route::post('/user/edit/{id}', 'Admin\HomeController@postUserEdit')->name('user.edit.post');
        Route::get('/user/delete/{id}', 'Admin\HomeController@userDelete')->name('user.delete');

        Route::get('/slider', 'Admin\HomeController@slider')->name('slider');
        Route::get('/slider/edit/{id}', 'Admin\HomeController@sliderEdit');
        Route::post('/slider/edit/{id}', 'Admin\HomeController@postSliderEdit')->name('slider.edit.post');
        Route::get('slider/add', 'Admin\HomeController@sliderAdd')->name('slider.add');
        Route::post('slider/add', 'Admin\HomeController@postSliderAdd')->name('slider.add.post');
        Route::get('slider/delete/{id}', 'Admin\HomeController@sliderDelete')->name('slider.delete');

        Route::get('/category', 'Admin\CategoryController@index')->name('category');
        Route::get('/category/add', 'Admin\CategoryController@create')->name('category.add');
        Route::post('/category/add', 'Admin\CategoryController@store')->name('category.add.post');
        Route::get('/category/edit/{id}', 'Admin\CategoryController@show')->name('category.edit');
        Route::post('/category/edit/{id}', 'Admin\CategoryController@edit')->name('category.edit.post');
        Route::get('/category/delete/{id}', 'Admin\CategoryController@destroy')->name('category.delete');

        Route::get('/product', 'Admin\ProductController@index')->name('product');
        Route::get('/product/edit/{id}', 'Admin\ProductController@show')->name('product.edit');
        Route::post('/product/edit/{id}', 'Admin\ProductController@edit')->name('product.edit.post');
        Route::get('/product/add', 'Admin\ProductController@create')->name('product.add');
        Route::post('/product/add', 'Admin\ProductController@store')->name('product.add.post');
        Route::get('/product/delete/{id}', 'Admin\ProductController@destroy')->name('product.delete');

        Route::get('cart/customer', 'Admin\HomeController@cart')->name('cart.customer');
        Route::get('cart/customer/view/{customer}', 'Admin\HomeController@cartDetail')->name('cart.detail');
        Route::post('cart/customer/view/{customer}', 'Admin\HomeController@cartStatus')->name('cart.customer.status');
    });

});
