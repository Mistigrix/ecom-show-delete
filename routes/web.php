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

Route::get('/', 'ProductController@index')->name('home');

Route::get('/save-product', 'ProductController@create')->name('create');

Route::post('/save-product', 'ProductController@store')->name('save-product');

Route::delete('/delete-product/{product_id}', 'ProductController@delete')->name('delete-product');
