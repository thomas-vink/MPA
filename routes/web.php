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

//Route::resource('categories', 'CategoriesController');

/* Product */
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{product}', 'ProductController@show');

/*Cart*/
Route::get('/cart','CartController@index')->name('cart');
Route::get('/cart/{product}', 'CartController@store');

Route::post('/cart/{product}', 'CartController@update')->name('cart.update');
