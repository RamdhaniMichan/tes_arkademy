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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/produk/create','create')->name('produk.create');
Route::get('/produk','ProdukController@index');
Route::post('/produk/store', 'ProdukController@store')->name('produk.store');
Route::get('/produk/edit/{id}', 'ProdukController@edit')->name('produk.edit');
Route::put('/produk/{id}', 'ProdukController@update')->name('produk.update');
Route::get('/produk/{id}', 'ProdukController@destroy')->name('produk.delete');
