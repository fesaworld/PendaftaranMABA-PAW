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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROUTES ADMIN
Route::group(['middleware' => 'check-permission:admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('verifikasi', 'VerifikasiController@index')->name('admin.verifikasi');
    Route::get('{biodata}/edit', 'VerifikasiController@edit')->name('admin.edit_verifikasi');
    Route::patch('{biodata}', 'VerifikasiController@update')->name('admin.verifikasi');
    });
});
 
 
// ROUTES PENDAFTAR
Route::group(['middleware' => 'check-permission:pendaftar'], function () {
    Route::group(['prefix' => 'pendaftar'], function () {
	Route::get('/dashboard', 'PendaftarController@index')->name('pendaftar.dashboard');
 
	});
});
