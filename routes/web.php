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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');



Route::get('/daftar','SiswaController@daftar')->name('daftar');
Route::post('/daftar/simpan','SiswaController@simpan')->name('simpan');
Route::get('/daftar/simpan/cetakpdf','SiswaController@cetakPdf')->name('cetakPdf');
Route::get('/cekStatus','SiswaController@cekStatus')->name('cekStatus');
Route::get('/cekStatus/status','SiswaController@status')->name('status');














Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/totalDaftar','HomeController@totalDaftar')->name('totalDaftar');
Route::get('/home/totalVerifikasi','HomeController@totalVerifikasi')->name('totalVerifikasi');
Route::get('/home/totalBelumVerifikasi','HomeController@belumVerifikasi')->name('belumVerifikasi');
Route::get('/home/totalVerifikasi/cariSiswa','HomeController@cari')->name('cariSiswa');
Route::get('/home/{id_siswa}','HomeController@show');
Route::get('/home/{id_siswa}/verifikasi','HomeController@approve');
Route::delete('/delete/{id_siswa}','HomeController@delete');
Route::get('/home/edit/{id_siswa}','HomeController@edit')->name('edit');
Route::post('/update/{id_siswa}','HomeController@update');
Route::get('/home/totalDaftar/cariSiswa/','HomeController@cari')->name('cariSiswa');
Route::get('{id_siswa}/verifikasi','HomeController@approve')->name('verifikasi');
Route::get('/home/export','HomeController@export_excel')->name('export_excel');
Route::get('/home/export/download','HomeController@download_excel')->name('download_excel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
