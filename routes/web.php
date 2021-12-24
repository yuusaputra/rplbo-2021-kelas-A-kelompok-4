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



Route::get('/', 'LoginController@tampilHalamanLogin')->name('login_');
Route::post('/', 'LoginController@login');


Auth::routes();

// Route::group(['middleware' => 'CekLoginMiddleware'], function(){
Route::group(['middleware' => 'auth'], function(){
    Route::get('/beranda', function () {return view('beranda');});
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::get('/statusuratmasuk', 'StatusSuratController@tampilStatusSuratMasuk')->name('statussuratmasuk');
    Route::get('/statusuratkeluar', 'StatusSuratController@tampilStatusSuratKeluar')->name('statussuratkeluar');
    Route::get('/statuslegalisirijazah', 'StatusSuratController@tampilStatusLegalisirIjazah')->name('statuslegalisirijazah');
    Route::get('/informasisuratmasuk/{id}', 'StatusSuratController@tampilInformasiSuratMasuk')->name('informasisuratmasuk');
    Route::get('/informasisuratkeluar/{id}', 'StatusSuratController@tampilInformasiSuratKeluar')->name('informasisuratkeluar');
    Route::get('/informasilegalisirijazah/{id}', 'StatusSuratController@tampilInformasiLegalisirIjazah')->name('informasilegalisirijazah');
});

Route::group(['middleware' => ['auth', 'CekUnitKerja:Resepsionis']], function(){
    Route::get('/manajemenpengguna', 'ManajemenPenggunaController@tampilPengguna')->name('tampilpengguna');
    Route::get('/tambahpengguna', 'ManajemenPenggunaController@tampilTambahPengguna')->name('tambahpengguna');
    Route::post('/tambahpengguna', 'ManajemenPenggunaController@tambahPengguna');   
    Route::get('/editpengguna/{id}', 'ManajemenPenggunaController@tampilEditPengguna')->name('editpengguna');
    Route::get('/lihatpengguna/{id}', 'ManajemenPenggunaController@tampilDetailPengguna')->name('lihatpengguna');
    
    Route::patch('/editpengguna/{id}', 'ManajemenPenggunaController@editPengguna');
    Route::delete('/deletepengguna/{id}', 'ManajemenPenggunaController@deletePengguna');

    Route::get('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilTambahPengajuanSuratMasuk')->name('tambahpengajuansuratmasuk');
    Route::get('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilEditPengajuanSuratMasuk')->name('editpengajuansuratmasuk');
    Route::patch('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@editPengajuanSuratMasuk');

    Route::post('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tambahPengajuanSuratMasuk');
    Route::delete('/deletepengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@deletePengajuanSuratMasuk');

    Route::get('/tambahlegalisirijazah', 'LegalisirIjazahController@tampilTambahLegalisirIjazah')->name('tambahlegalisirijazah');
    Route::post('/tambahlegalisirijazah', 'LegalisirIjazahController@tambahLegalisirIjazah');
    Route::delete('/deletelegalisirijazah/{id}', 'LegalisirIjazahController@deleteLegalisirIjazah');

    Route::get('/hasilsuratkeluar', 'HasilSuratKeluarController@tampilHasilSuratKeluar')->name('tampilhasilsuratkeluar');
    Route::get('/hasillegalisirijazah', 'HasilLegalisirIjazahController@tampilHasilLegalisirIjazah')->name('tampilhasillegalisirijazah');
    Route::get('/downloadHasilSuratKeluar/{file}', 'HasilSuratKeluarController@download')->name('downloadHasilSuratKeluar');
    Route::get('/downloadHasilLegalisirIjazah/{file}', 'HasilSuratKeluarController@download')->name('downloadHasilLegalisirIjazah');


});

Route::group(['middleware' => ['auth', 'CekUnitKerja:Staf Administrasi Umum']], function(){
    Route::get('/suratkeluar', 'SuratKeluarController@tampilSuratKeluar')->name('tampilsuratkeluar');
    Route::get('/tambahsuratkeluar', 'SuratKeluarController@tampilTambahSuratKeluar')->name('tambahsuratkeluar');
    Route::get('/editsuratkeluar/{id}', 'SuratKeluarController@tampilEditSuratKeluar')->name('editsuratkeluar');
    Route::get('/lihatsuratkeluar/{id}', 'SuratKeluarController@tampilDetailSuratKeluar')->name('detailsuratkeluar');
    Route::get('/serahkansuratkeluar/{id}', 'SuratKeluarController@tampilSerahkanSuratKeluar')->name('serahkansuratkeluar');
    Route::post('/tambahsuratkeluar', 'SuratKeluarController@tambahSuratKeluar');
    Route::patch('/editsuratkeluar/{id}', 'SuratKeluarController@editSuratKeluar');
    Route::patch('/serahkansuratkeluar/{id}', 'SuratKeluarController@serahkanSuratKeluar');
    Route::delete('/deletesuratkeluar/{id}', 'SuratKeluarController@deleteSuratKeluar');

    Route::get('/downloadSuratKeluar/{file}', 'SuratKeluarController@download')->name('downloadSuratKeluar');


    Route::get('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilTambahPengajuanSuratKeluar')->name('tambahpengajuansuratkeluar');
    Route::post('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tambahPengajuanSuratKeluar');
    Route::delete('/deletepengajuansuratkeluar/{id}', 'PengajuanSuratKeluarController@deletePengajuanSuratKeluar');

    Route::get('/tambahsuratmasuk', 'SuratMasukController@tampilTambahSuratMasuk')->name('tambahsuratmasuk');
    Route::post('/tambahsuratmasuk', 'SuratMasukController@tambahSuratMasuk');
    Route::delete('/deletesuratmasuk/{id}', 'SuratMasukController@deleteSuratMasuk');
});

Route::group(['middleware' => ['auth', 'CekUnitKerja:Resepsionis,Staf Administrasi Umum']], function(){
    Route::get('/pengajuansuratmasuk', 'PengajuanSuratMasukController@tampilPengajuanSuratMasuk')->name('tampilpengajuansuratmasuk');
    Route::get('/lihatpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilDetailPengajuanSuratMasuk')->name('detailpengajuansuratmasuk');
    Route::get('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilSerahkanPengajuanSuratMasuk')->name('serahkanpengajuansuratmasuk');
    Route::patch('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@serahkanPengajuanSuratMasuk');

    Route::get('/downloadPengajuanSuratMasuk/{file}', 'PengajuanSuratMasukController@download')->name('downloadPengajuanSuratMasuk');
});

Route::group(['middleware' => ['auth', 'CekUnitKerja:Resepsionis,Staf Administrasi Umum,Kepala Sekolah']], function(){
    Route::get('/legalisirijazah', 'LegalisirIjazahController@tampilLegalisirIjazah')->name('tampillegalisirijazah');
    Route::get('/editlegalisirijazah/{id}', 'LegalisirIjazahController@tampilEditLegalisirIjazah')->name('editlegalisirijazah');
    Route::get('/lihatlegalisirijazah/{id}', 'LegalisirIjazahController@tampilDetailLegalisirIjazah')->name('detaillegalisirijazah');
    Route::get('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@tampilSerahkanLegalisirIjazah')->name('serahkanlegalisirijazah');
    Route::patch('/editlegalisirijazah/{id}', 'LegalisirIjazahController@editLegalisirIjazah');
    Route::patch('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@serahkanLegalisirIjazah');
    Route::get('/downloadLegalisirIjazah/{file}', 'LegalisirIjazahController@download')->name('downloadLegalisirIjazah');

});

Route::group(['middleware' => ['auth', 'CekUnitKerja:Kepala Tata Usaha,Staf Administrasi Umum,Kepala Sekolah']], function(){
    Route::get('/pengajuansuratkeluar', 'PengajuanSuratKeluarController@tampilPengajuanSuratKeluar')->name('tampilpengajuansuratkeluar');
    Route::get('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilEditPengajuanSuratKeluar')->name('editpengajuansuratkeluar');
    Route::get('/lihatpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilDetailPengajuanSuratKeluar')->name('detailpengajuansuratkeluar');
    Route::get('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilSerahkanPengajuanSuratKeluar')->name('serahkanpengajuansuratkeluar');
    Route::patch('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@editPengajuanSuratKeluar');
    Route::patch('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@serahkanPengajuanSuratKeluar');

    Route::get('/downloadPengajuanSuratKeluar/{file}', 'PengajuanSuratKeluarController@download')->name('downloadPengajuanSuratKeluar');


    Route::get('/suratmasuk', 'SuratMasukController@tampilSuratMasuk')->name('tampilsuratmasuk');
    Route::get('/editsuratmasuk/{id}', 'SuratMasukController@tampilEditSuratMasuk')->name('editsuratmasuk');
    Route::get('/lihatsuratmasuk/{id}', 'SuratMasukController@tampilDetailSuratMasuk')->name('detailsuratmasuk');
    Route::get('/serahkansuratmasuk/{id}', 'SuratMasukController@tampilSerahkanSuratMasuk')->name('serahkansuratmasuk');
    Route::patch('/editsuratmasuk/{id}', 'SuratMasukController@editSuratMasuk');
    Route::patch('/serahkansuratmasuk/{id}', 'SuratMasukController@serahkanSuratMasuk');

    Route::get('/downloadSuratMasuk/{file}', 'SuratMasukController@download')->name('downloadSuratMasuk');

});

// Route::get('/beranda', function () {return view('beranda');});
    

    // Route::get('/pengajuansuratmasuk', 'PengajuanSuratMasukController@tampilPengajuanSuratMasuk')->name('tampilpengajuansuratmasuk');
    // Route::get('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tampilTambahPengajuanSuratMasuk')->name('tambahpengajuansuratmasuk');
    // Route::get('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilEditPengajuanSuratMasuk')->name('editpengajuansuratmasuk');
    // Route::get('/lihatpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilDetailPengajuanSuratMasuk')->name('detailpengajuansuratmasuk');
    // Route::get('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@tampilSerahkanPengajuanSuratMasuk')->name('serahkanpengajuansuratmasuk');
    // Route::post('/tambahpengajuansuratmasuk', 'PengajuanSuratMasukController@tambahPengajuanSuratMasuk');
    // Route::patch('/editpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@editPengajuanSuratMasuk');
    // Route::patch('/serahkanpengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@serahkanPengajuanSuratMasuk');
    // Route::delete('/deletepengajuansuratmasuk/{id}', 'PengajuanSuratMasukController@deletePengajuanSuratMasuk');
    
    // Route::get('/pengajuansuratkeluar', 'PengajuanSuratKeluarController@tampilPengajuanSuratKeluar')->name('tampilpengajuansuratkeluar');
    // Route::get('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tampilTambahPengajuanSuratKeluar')->name('tambahpengajuansuratkeluar');
    // Route::get('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilEditPengajuanSuratKeluar')->name('editpengajuansuratkeluar');
    // Route::get('/lihatpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilDetailPengajuanSuratKeluar')->name('detailpengajuansuratkeluar');
    // Route::get('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@tampilSerahkanPengajuanSuratKeluar')->name('serahkanpengajuansuratkeluar');
    // Route::post('/tambahpengajuansuratkeluar', 'PengajuanSuratkeluarController@tambahPengajuanSuratKeluar');
    // Route::patch('/editpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@editPengajuanSuratKeluar');
    // Route::patch('/serahkanpengajuansuratkeluar/{id}', 'PengajuanSuratkeluarController@serahkanPengajuanSuratKeluar');
    // Route::delete('/deletepengajuansuratkeluar/{id}', 'PengajuanSuratKeluarController@deletePengajuanSuratKeluar');
    
    // Route::get('/suratmasuk', 'SuratMasukController@tampilSuratMasuk')->name('tampilsuratmasuk');
    // Route::get('/tambahsuratmasuk', 'SuratMasukController@tampilTambahSuratMasuk')->name('tambahsuratmasuk');
    // Route::get('/editsuratmasuk/{id}', 'SuratMasukController@tampilEditSuratMasuk')->name('editsuratmasuk');
    // Route::get('/lihatsuratmasuk/{id}', 'SuratMasukController@tampilDetailSuratMasuk')->name('detailsuratmasuk');
    // Route::get('/serahkansuratmasuk/{id}', 'SuratMasukController@tampilSerahkanSuratMasuk')->name('serahkansuratmasuk');
    // Route::post('/tambahsuratmasuk', 'SuratMasukController@tambahSuratMasuk');
    // Route::patch('/editsuratmasuk/{id}', 'SuratMasukController@editSuratMasuk');
    // Route::patch('/serahkansuratmasuk/{id}', 'SuratMasukController@serahkanSuratMasuk');
    // Route::delete('/deletesuratmasuk/{id}', 'SuratMasukController@deleteSuratMasuk');
    
    // Route::get('/suratkeluar', 'SuratKeluarController@tampilSuratKeluar')->name('tampilsuratkeluar');
    // Route::get('/tambahsuratkeluar', 'SuratKeluarController@tampilTambahSuratKeluar')->name('tambahsuratkeluar');
    // Route::get('/editsuratkeluar/{id}', 'SuratKeluarController@tampilEditSuratKeluar')->name('editsuratkeluar');
    // Route::get('/lihatsuratkeluar/{id}', 'SuratKeluarController@tampilDetailSuratKeluar')->name('detailsuratkeluar');
    // Route::get('/serahkansuratkeluar/{id}', 'SuratKeluarController@tampilSerahkanSuratKeluar')->name('serahkansuratkeluar');
    // Route::post('/tambahsuratkeluar', 'SuratKeluarController@tambahSuratKeluar');
    // Route::patch('/editsuratkeluar/{id}', 'SuratKeluarController@editSuratKeluar');
    // Route::patch('/serahkansuratkeluar/{id}', 'SuratKeluarController@serahkanSuratKeluar');
    // Route::delete('/deletesuratkeluar/{id}', 'SuratKeluarController@deleteSuratKeluar');
    
    
    // Route::get('/legalisirijazah', 'LegalisirIjazahController@tampilLegalisirIjazah')->name('tampillegalisirijazah');
    // Route::get('/tambahlegalisirijazah', 'LegalisirIjazahController@tampilTambahLegalisirIjazah')->name('tambahlegalisirijazah');
    // Route::get('/editlegalisirijazah/{id}', 'LegalisirIjazahController@tampilEditLegalisirIjazah')->name('editlegalisirijazah');
    // Route::get('/lihatlegalisirijazah/{id}', 'LegalisirIjazahController@tampilDetailLegalisirIjazah')->name('detaillegalisirijazah');
    // Route::get('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@tampilSerahkanLegalisirIjazah')->name('serahkanlegalisirijazah');
    // Route::post('/tambahlegalisirijazah', 'LegalisirIjazahController@tambahLegalisirIjazah');
    // Route::patch('/editlegalisirijazah/{id}', 'LegalisirIjazahController@editLegalisirIjazah');
    // Route::patch('/serahkanlegalisirijazah/{id}', 'LegalisirIjazahController@serahkanLegalisirIjazah');
    // Route::delete('/deletelegalisirijazah/{id}', 'LegalisirIjazahController@deleteLegalisirIjazah');
    
    

    // Route::get('/logout', 'LoginController@logout')->name('logout');