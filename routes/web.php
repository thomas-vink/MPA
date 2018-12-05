<?php

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

Auth::routes();
Route::get('/', 'ProductController@index')->name('home');


/* Categories */
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{category}', 'CategoryController@show');

/* Product */
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}', 'ProductController@show');
