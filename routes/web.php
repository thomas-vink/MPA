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
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');


/* Product */
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');

/*Cart*/
Route::get('/cart','CartController@index')->name('cart');
Route::post('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/{product}', 'CartController@store')->name('cart.store');

/*Orders*/
Route::get('/order','OrderController@index')->name('order');
