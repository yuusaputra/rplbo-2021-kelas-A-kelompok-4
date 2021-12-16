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
    return view('beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/manajemenpengguna', 'ManajemenPenggunaController@tampilPengguna')->name('tampilpengguna');
Route::get('/tambahpengguna', 'ManajemenPenggunaController@tampilTambahPengguna')->name('tambahpengguna');
Route::get('/editpengguna', 'ManajemenPenggunaController@tampilEditPengguna')->name('editpengguna');

Route::get('/pengajuansuratmasuk', 'PengajuanSuratMasukController@tampilPengajuanSuratMasuk')->name('tampilpengajuansuratmasuk');
Route::get('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilTambahPengajuanSuratMasuk')->name('tambahpengajuansuratmasuk');
Route::get('/editpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilEditPengajuanSuratMasuk')->name('editpengajuansuratmasuk');
Route::get('/lihatpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilDetailPengajuanSuratMasuk')->name('detailpengajuansuratmasuk');
Route::get('/serahkanpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilSerahkanPengajuanSuratMasuk')->name('serahkanpengajuansuratmasuk');

Route::get('/pengajuansuratkeluar', 'PengajuanSuratKeluarController@tampilPengajuanSuratKeluar')->name('tampilpengajuansuratkeluar');
Route::get('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilTambahPengajuanSuratKeluar')->name('tambahpengajuansuratkeluar');
Route::get('/editpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilEditPengajuanSuratKeluar')->name('editpengajuansuratkeluar');
Route::get('/lihatpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilDetailPengajuanSuratKeluar')->name('detailpengajuansuratkeluar');
Route::get('/serahkanpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilSerahkanPengajuanSuratKeluar')->name('serahkanpengajuansuratkeluar');

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
Route::get('/editlegalisirijazah', 'LegalisirIjazahController@tampilEditLegalisirIjazah')->name('editlegalisirijazah');
Route::get('/lihatlegalisirijazah', 'LegalisirIjazahController@tampilDetailLegalisirIjazah')->name('detaillegalisirijazah');
Route::get('/serahkanlegalisirijazah', 'LegalisirIjazahController@tampilSerahkanLegalisirIjazah')->name('serahkanlegalisirijazah');
