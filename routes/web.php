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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'productController@index');

Route::get('/search', 'productController@search')->name("search.search");

Route::get('/products/add', 'productController@add');

Route::get('/products/sold', 'productController@soldview');

Route::get('/products/info', 'productController@getInfo');


Route::post('/productadd', 'productController@create');

Route::post('/sell', 'productController@sell')->name("sell.sell");
