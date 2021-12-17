<?php

use Illuminate\Support\Facades\Auth;
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
    return view('beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manajemenpengguna', 'ManajemenPenggunaController@tampilPengguna')->name('tampilpengguna');
Route::get('/tambahpengguna', 'ManajemenPenggunaController@tampilTambahPengguna')->name('tambahpengguna');
Route::get('/editpengguna/{id}', 'ManajemenPenggunaController@tampilEditPengguna')->name('editpengguna');
Route::post('/tambahpengguna', 'ManajemenPenggunaController@tambahPengguna');
Route::patch('/editpengguna/{id}', 'ManajemenPenggunaController@editPengguna');
Route::delete('/deletepengguna/{id}', 'ManajemenPenggunaController@deletePengguna');

Route::get('/pengajuansuratmasuk', 'PengajuanSuratMasukController@tampilPengajuanSuratMasuk')->name('tampilpengajuansuratmasuk');
Route::get('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilTambahPengajuanSuratMasuk')->name('tambahpengajuansuratmasuk');
Route::get('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilEditPengajuanSuratMasuk')->name('editpengajuansuratmasuk');
Route::get('/lihatpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilDetailPengajuanSuratMasuk')->name('detailpengajuansuratmasuk');
Route::get('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilSerahkanPengajuanSuratMasuk')->name('serahkanpengajuansuratmasuk');
Route::post('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tambahPengajuanSuratMasuk');
Route::patch('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@editPengajuanSuratMasuk');
Route::patch('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@serahkanPengajuanSuratMasuk');
Route::delete('/deletepengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@deletePengajuanSuratMasuk');

Route::get('/pengajuansuratkeluar', 'PengajuanSuratKeluarController@tampilPengajuanSuratKeluar')->name('tampilpengajuansuratkeluar');
Route::get('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilTambahPengajuanSuratKeluar')->name('tambahpengajuansuratkeluar');
Route::get('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilEditPengajuanSuratKeluar')->name('editpengajuansuratkeluar');
Route::get('/lihatpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilDetailPengajuanSuratKeluar')->name('detailpengajuansuratkeluar');
Route::get('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilSerahkanPengajuanSuratKeluar')->name('serahkanpengajuansuratkeluar');
Route::post('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tambahPengajuanSuratKeluar');
Route::patch('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@editPengajuanSuratKeluar');
Route::patch('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@serahkanPengajuanSuratKeluar');
Route::delete('/deletepengajuansuratkeluar/{id}', 'PengajuanSuratKeluarController@deletePengajuanSuratKeluar');

Route::get('/suratmasuk', 'SuratMasukController@tampilSuratMasuk')->name('tampilsuratmasuk');
Route::get('/tambahsuratmasuk', 'SuratMasukController@tampilTambahSuratMasuk')->name('tambahsuratmasuk');
Route::get('/editsuratmasuk', 'SuratMasukController@tampilEditSuratMasuk')->name('editsuratmasuk');
Route::get('/lihatsuratmasuk', 'SuratMasukController@tampilDetailSuratMasuk')->name('detailsuratmasuk');
Route::get('/serahkansuratmasuk', 'SuratMasukController@tampilSerahkanSuratMasuk')->name('serahkansuratmasuk');

Route::get('/suratkeluar', 'SuratKeluarController@tampilSuratKeluar')->name('tampilsuratkeluar');
Route::get('/tambahsuratkeluar', 'SuratkeluarController@tampilTambahSuratKeluar')->name('tambahsuratkeluar');
Route::get('/editsuratkeluar', 'SuratkeluarController@tampilEditSuratKeluar')->name('editsuratkeluar');
Route::get('/lihatsuratkeluar', 'SuratkeluarController@tampilDetailSuratKeluar')->name('detailsuratkeluar');
Route::get('/serahkansuratkeluar', 'SuratkeluarController@tampilSerahkanSuratKeluar')->name('serahkansuratkeluar');

Route::get('/legalisirijazah', 'LegalisirIjazahController@tampilLegalisirIjazah')->name('tampillegalisirijazah');
Route::get('/tambahlegalisirijazah', 'LegalisirIjazahController@tampilTambahLegalisirIjazah')->name('tambahlegalisirijazah');
Route::get('/editlegalisirijazah/{id}', 'LegalisirIjazahController@tampilEditLegalisirIjazah')->name('editlegalisirijazah');
Route::get('/lihatlegalisirijazah/{id}', 'LegalisirIjazahController@tampilDetailLegalisirIjazah')->name('detaillegalisirijazah');
Route::get('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@tampilSerahkanLegalisirIjazah')->name('serahkanlegalisirijazah');
Route::post('/tambahlegalisirijazah', 'LegalisirIjazahController@tambahLegalisirIjazah');
Route::patch('/editlegalisirijazah/{id}', 'LegalisirIjazahController@editLegalisirIjazah');
Route::patch('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@serahkanLegalisirIjazah');
Route::delete('/deletelegalisirijazah/{id}', 'LegalisirIjazahController@deleteLegalisirIjazah');
