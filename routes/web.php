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

Route::get('/', 'PagesController@home');

//Pendaftaran
Route::get('/pendaftaran', 'DaftarController@index')->name('pendaftaran');
Route::get('/pendaftaran/create', 'DaftarController@create');
Route::post('/pendaftaran/create', 'DaftarController@store');
Route::get('/pendaftaran/{pendaftaran}', 'DaftarController@show');
Route::delete('/pendaftaran/{pendaftaran}', 'DaftarController@destroy');
Route::get('/pendaftaran/{pendaftaran}/edit', 'DaftarController@edit');
Route::patch('/pendaftaran/{pendaftaran}', 'DaftarController@update');


Route::get('/pengumuman', 'PagesController@pengumuman');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});