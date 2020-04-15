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

Route::get('halo', function () {
	return "Halo, Selamat datang. Ini adalah string dari routes yang kita buat.";
});

Route::get('about', function () {
	return view('about');
});

Route::get('guru', 'GuruController@index');

Route::get('/karyawan/{nama}', 'KaryawanController@index');

// formulir
Route::get('/formulir', 'KaryawanController@formulir');
Route::post('/formulir/proses', 'KaryawanController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');