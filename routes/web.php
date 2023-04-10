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

//Route Login
Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

//Kalo user salah masukin password atau email
Route::get('/eror', 'BerandaController@eror')->name('eror');

Route::group(['middleware' => ['auth']], function () {

    //Data Melanggar tingkat 1
    Route::get('/data-melanggar', 'TarunaController@index')->name('data-melanggar');
    Route::get('/exporttaruna', 'TarunaController@tarunaexport')->name('exporttaruna');
    Route::get('/create-taruna', 'TarunaController@create')->name('create-taruna');
    Route::post('/simpan-taruna', 'TarunaController@store')->name('simpan-taruna');
    Route::get('/edit-taruna/{id}', 'TarunaController@edit')->name('edit-taruna');
    Route::post('/update-taruna/{id}', 'TarunaController@update')->name('update-taruna');
    Route::get('/delete-taruna/{id}', 'TarunaController@destroy')->name('delete-taruna');
    Route::get('/cetak-taruna', 'TarunaController@cetakTaruna')->name('cetak-taruna');

    //Data Melanggar Tingkat 2
    Route::get('/data-melanggar2', 'Tingkat2Controller@index')->name('data-melanggar2');
    Route::get('/create-taruna2', 'Tingkat2Controller@create')->name('create-taruna2');
    Route::post('/simpan-taruna2', 'Tingkat2Controller@store')->name('simpan-taruna2');
    Route::get('/exporttingkat2', 'Tingkat2Controller@tingkat2export')->name('exporttingkat2');
    Route::get('/edit-taruna2/{id}', 'Tingkat2Controller@edit')->name('edit-taruna2');
    Route::post('/update-taruna2/{id}', 'Tingkat2Controller@update')->name('update-taruna2');
    Route::get('/delete-taruna2/{id}', 'Tingkat2Controller@destroy')->name('delete-taruna2');
    Route::get('/cetak-taruna2', 'Tingkat2Controller@cetakTaruna')->name('cetak-taruna2');

    //Data melanggar Tingkat3
    Route::get('/data-melanggar3', 'Tingkat3Controller@index')->name('data-melanggar3');
    Route::get('/create-taruna3', 'Tingkat3Controller@create')->name('create-taruna3');
    Route::post('/simpan-taruna3', 'Tingkat3Controller@store')->name('simpan-taruna3');
    Route::get('/exportingkat3', 'Tingkat3Controller@tingkat3export')->name('exportingkat3');
    Route::get('/edit-taruna3/{id}', 'Tingkat3Controller@edit')->name('edit-taruna3');
    Route::post('/update-taruna3/{id}', 'Tingkat3Controller@update')->name('update-taruna3');
    Route::get('/delete-taruna3/{id}', 'Tingkat3Controller@destroy')->name('delete-taruna3');
    Route::get('/cetak-taruna3', 'Tingkat3Controller@cetakTaruna')->name('cetak-taruna3');


    //Cetak Data Pertanggal Taruna Melanggar
    Route::get('/cetak-data-taruna-form', 'TarunaController@cetakForm')->name('cetak-data-taruna-form');
    Route::get('/cetak-data-taruna-form2', 'Tingkat2Controller@cetakForm')->name('cetak-data-taruna-form2');
    Route::get('/cetak-data-taruna-form3', 'Tingkat3Controller@cetakForm')->name('cetak-data-taruna-form3');
    Route::get('/cetak-data-pertanggal/{tglawal}/{tglakhir}', 'TarunaController@cetakTarunaPertanggal')->name('cetak-data-pertanggal');
    Route::get('/cetak-data-pertanggal2/{tglawal}/{tglakhir}', 'Tingkat2Controller@cetakTarunaPertanggall')->name('cetak-data-pertanggal2');
    Route::get('/cetak-data-pertanggal3/{tglawal}/{tglakhir}', 'Tingkat3Controller@cetakTarunaPertanggalll')->name('cetak-data-pertanggal3');

    //Data Prestasi X
    Route::get('/data-prestasi', 'PrestasiController@index')->name('data-prestasi');
    Route::get('/exportprestasi', 'PrestasiController@prestasiexport')->name('exportprestasi');
    Route::get('/create-prestasi', 'PrestasiController@create')->name('create-prestasi');
    Route::post('/simpan-prestasi', 'PrestasiController@store')->name('simpan-prestasi');
    Route::get('/edit-prestasi/{id}', 'PrestasiController@edit')->name('edit-prestasi');
    Route::post('/update-prestasi/{id}', 'PrestasiController@update')->name('update-prestasi');
    Route::get('/delete-prestasi/{id}', 'PrestasiController@destroy')->name('delete-prestasi');
    Route::get('/cetak-prestasi', 'PrestasiController@cetakPrestasi')->name('cetak-prestasi');

    //Data Prestasi XI
    Route::get('/data-prestasi2', 'Prestasi2Controller@index')->name('data-prestasi2');
    Route::get('/create-prestasi2', 'Prestasi2Controller@create')->name('create-prestasi2');
    Route::post('/simpan-prestasi2', 'Prestasi2Controller@store')->name('simpan-prestasi2');
    Route::get('/edit-prestasi2/{id}', 'Prestasi2Controller@edit')->name('edit-prestasi2');
    Route::post('/update-prestasi2/{id}', 'Prestasi2Controller@update')->name('update-prestasi2');
    Route::get('/delete-prestasi2/{id}', 'Prestasi2Controller@destroy')->name('delete-prestasi2');
    Route::get('/cetak-prestasi2', 'Prestasi2Controller@cetakPrestasi')->name('cetak-prestasi2');
    Route::get('/exportprestasi2', 'Prestasi2Controller@prestasiexport')->name('exportprestasi2');

    //Data Prestasi XII
    Route::get('/data-prestasi3', 'Prestasi3Controller@index')->name('data-prestasi3');
    Route::get('/create-prestasi3', 'Prestasi3Controller@create')->name('create-prestasi3');
    Route::post('/simpan-prestasi3', 'Prestasi3Controller@store')->name('simpan-prestasi3');
    Route::get('/edit-prestasi3/{id}', 'Prestasi3Controller@edit')->name('edit-prestasi3');
    Route::post('/update-prestasi3/{id}', 'Prestasi3Controller@update')->name('update-prestasi3');
    Route::get('/delete-prestasi3/{id}', 'Prestasi3Controller@destroy')->name('delete-prestasi3');
    Route::get('/cetak-prestasi3', 'Prestasi3Controller@cetakPrestasi')->name('cetak-prestasi3');
    Route::get('/exportprestasi3', 'Prestasi3Controller@prestasiexport')->name('exportprestasi3');

    //Cetak Data Pertanggal Prestasi
    Route::get('/cetak-data-prestasi-form', 'PrestasiController@cetakForm')->name('cetak-data-prestasi-form');
    Route::get('/cetak-data-prestasi-form2', 'Prestasi2Controller@cetakForm')->name('cetak-data-prestasi-form2');
    Route::get('/cetak-data-prestasi-form3', 'Prestasi3Controller@cetakForm')->name('cetak-data-prestasi-form3');
    Route::get('/cetak-data-pertanggall/{tglawal}/{tglakhir}', 'PrestasiController@cetakPrestasiPertanggal')->name('cetak-data-pertanggal');
    Route::get('/cetak-data-pertanggall2/{tglawal}/{tglakhir}', 'Prestasi2Controller@cetakPrestasiPertanggal')->name('cetak-data-pertanggal2');
    Route::get('/cetak-data-pertanggall3/{tglawal}/{tglakhir}', 'Prestasi3Controller@cetakPrestasiPertanggal')->name('cetak-data-pertanggal3');

    //Data Gambar
    Route::get('/gambar-pelanggaran', 'UploadgambarController@index')->name('gambar-pelanggar');
    Route::get('/gambar-prestasi', 'UploadgambarController@indexx')->name('gambar-prestasi');
    Route::get('/create-pelanggar', 'UploadgambarController@create')->name('create-pelanggar');
    Route::get('/create-prestasii', 'UploadgambarController@createe')->name('create-prestasii');
    Route::post('/simpan-pelanggar', 'UploadgambarController@store')->name('simpan-pelanggar');
    Route::post('/simpan-prestasii', 'UploadgambarController@storee')->name('simpan-prestasii');
    Route::get('/edit-gambar-pelanggar/{id}', 'UploadgambarController@edit')->name('edit-gambar-pelanggar');
    Route::get('/edit-gambar-prestasi/{id}', 'UploadgambarController@editt')->name('edit-gambar-prestasi');
    Route::post('/update-gambar-pelanggar/{id}', 'UploadgambarController@update')->name('update-gambar-pelanggar');
    Route::post('/update-gambar-prestasi/{id}', 'UploadgambarController@updatee')->name('update-gambar-prestasi');
    Route::get('/delete-gambar-pelanggar/{id}', 'UploadgambarController@destroy')->name('delete-gambar-pelanggar');
    Route::get('/delete-gambar-prestasi/{id}', 'UploadgambarController@destroyy')->name('delete-gambar-prestasi');

    //Beranda Dan catatan kegiatan
    Route::get('/beranda', 'BerandaController@beranda')->name('beranda');

    //Catatan
    Route::get('/catatan', 'CatatanController@index')->name('catatan');
    Route::get('/create-catatan', 'CatatanController@create')->name('create-catatan');
    Route::post('/simpan-catatan', 'CatatanController@store')->name('simpan-catatan');
    Route::get('/edit-catatan/{id}', 'CatatanController@edit')->name('edit-catatan');
    Route::post('/update-catatan/{id}', 'CatatanController@update')->name('update-catatan');
    Route::get('/delete-catatan/{id}', 'CatatanController@destroy')->name('delete-catatan');
    Route::get('/cetak-catatan', 'CatatanController@cetakCatatan')->name('cetak-catatan');

    //Cetak pertanggal simpel
    Route::get('/cetak-pertanggal', 'CetakPertanggalController@cetakPertanggal')->name('cetak-pertanggal');
    Route::get('/cetak-pertanggal-prestasi', 'CetakPertanggalController@cetakPertanggall')->name('cetak-pertanggal-prestasi');
});
