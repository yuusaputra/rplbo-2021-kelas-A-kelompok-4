<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSuratKeluarController extends Controller
{
    public function tampilPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.pengajuansuratkeluar');
    }

    public function tampilTambahPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.tambahpengajuansuratkeluar');
    }

    public function tampilEditPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.editpengajuansuratkeluar');
    }

    public function tampilDetailPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.detailpengajuansuratkeluar');
    }
    
    public function tampilSerahkanPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.serahkanpengajuansuratkeluar');
    }
}
