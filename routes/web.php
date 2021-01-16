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
Route::get('/pendaftaran/{pendaftaran}/download', 'DaftarController@download');

//Pengumuman
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman');
Route::get('/pengumuman/create', 'PengumumanController@create');
Route::post('/pengumuman/create', 'PengumumanController@store');
Route::delete('/pengumuman/{pengumuman}', 'PengumumanController@destroy');
Route::get('/pengumuman/{pengumuman}/edit', 'PengumumanController@edit');
Route::patch('/pengumuman/{pengumuman}', 'PengumumanController@update');


//Prodi
Route::get('/prodi', 'ProdiController@index');
Route::get('/prodi/create', 'ProdiController@create');
Route::post('/prodi/create', 'ProdiController@store');
Route::delete('/prodi/{prodi}', 'ProdiController@destroy');
Route::get('/prodi/{prodi}/edit', 'ProdiController@edit');
Route::patch('/prodi/{prodi}', 'ProdiController@update');

//pkm
Route::get('/pkm', 'PkmController@index');
Route::get('/pkm/create', 'PkmController@create');
Route::post('/pkm/create', 'PkmController@store');
Route::delete('/pkm/{pkm}', 'PkmController@destroy');
Route::get('/pkm/{pkm}/edit', 'PkmController@edit');
Route::patch('/pkm/{pkm}', 'PkmController@update');


//Review
Route::get('/review', 'ReviewController@index');




//Upload Gambar di Halaman Monev
Route::get('/monev', 'UploadController@upload')->name('monev');

Route::get('/upload/download', 'UploadController@download');
//Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');

//Hapus Gambar
Route::get('/upload/hapus/{id}', 'UploadController@hapus');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});