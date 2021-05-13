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

Route::get('/', 'ProdottoController@index')->name('homepage');

Route::get('/product/{id}', 'ProdottoController@show' )->where('id', '[0-9]+')->name('product');

Route::get('/news', 'NewsController@index')->name('news');