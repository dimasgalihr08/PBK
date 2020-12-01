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

//    Route::get('/', function () {
//        return view('index');
//    });
//
//    Route::get('/about', function () {
//        $nama = 'Dimas Galih';
//        return view('about', ['nama' => $nama]);
//    });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
//mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/mahasiswa.create','MahasiswaController@create');

Route::post('insert', 'MahasiswaController@insert');

Route::get('delete/{id}','MahasiswaController@delete');

Route::get('edit/{id}','MahasiswaController@edit');

Route::post('update/{id}', 'MahasiwaController@update');

Route::get('read/{id}','MahasiswaController@read');