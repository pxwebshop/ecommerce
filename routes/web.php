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

Route::get('/', 'Front\HomeController@index');
Route::get('/product-list', 'Front\ProductListController@index');
Route::get('/product-detail', 'Front\ProductDetailController@index');


Route::get('/component', function () {
    return view('component');
});
