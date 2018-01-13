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

Route::get('/', 'PageController@index');
Route::get('/home', 'PageController@home');
Route::get('/promo', 'PageController@promo');
Route::get('/about', 'PageController@about');
Route::get('/myorder', 'PageController@myorder');
Route::get('/allorder', 'PageController@allorder');
Route::get('/order', 'PageController@order');
Route::get('/logout', 'PageController@logout');
Route::get('/doSearch', 'PageController@search');
Route::post('//doAddProduct', 'PageController@addProduct');
Auth::routes();


