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
Route::resource('/e-lelang','homeUserController');
Route::POST('create', 'homeUserController@store')->name('createProduct');
Route::resource('admin','AdminController');
Route::resource('barangku','lelangController');
Route::POST('harga','hargaController@store')->name('createHarga');
Route::POST('lelang','lelangController@store')->name('createLelang');
Route::resource('regis','RegisController');
Route::get('cari','RegisController@cari')->name('cari');

