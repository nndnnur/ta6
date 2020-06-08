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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/beritaa', function () {
    return view('beritaa');
});

Route::get('/staff', 'StaffController@index');

Route::get('staff/tambah', 'StaffController@tambah');

Route::post('staff/store', 'StaffController@store');

Route::get('/staff/edit/{id}', 'StaffController@edit');

Route::post('/staff/update', 'StaffController@update');

Route::get('/staff/hapus/{id}', 'StaffController@hapus');