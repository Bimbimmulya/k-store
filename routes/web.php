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

Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/create', 'ProductController@create');

Route::post('/store', 'ProductController@store');

Route::get('/view', 'ProductController@viewProduct');

Route::get('/edit/{id}', 'ProductController@edit');

Route::delete('/delete/{id}', 'ProductController@delete');

Route::patch('update/{id}', 'ProductController@update');

Route::get('/index', 'HomeController@index');

Route::get('/protected', 'ProductController@proteksi');

Route::get('/category', 'CategoryController@index');

Route::get('/create-category', 'CategoryController@create');

Route::post('/post', 'CategoryController@store');

Route::get('/laporan', 'HomeController@laporan');

Route::get('/belum-bayar', 'HomeController@belumbayar');

Route::get('/sudah-bayar', 'HomeController@sudahbayar');

Route::get('/pembelian-batal', 'HomeController@pembelianbatal');



Route::get('/index', 'ShopController@index');

Route::get('/detail/{id}', 'ShopController@show');

Route::get('/cart', 'CartController@index');

Route::post('/cart-store', 'CartController@store');

Route::patch('/cart/{id}', 'CartController@update');

Route::post('/checkout', 'CheckoutController@store');

Route::get('/payment', 'KonfirmasiController@index');

Route::delete('/remove/{id}', 'CartController@remove');