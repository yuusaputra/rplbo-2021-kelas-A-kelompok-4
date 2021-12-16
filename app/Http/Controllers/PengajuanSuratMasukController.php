<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSuratMasukController extends Controller
{
    public function tampilPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.pengajuansuratmasuk');
    }

    public function tampilTambahPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.tambahpengajuansuratmasuk');
    }

    public function tampilEditPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.editpengajuansuratmasuk');
    }

    public function tampilDetailPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.detailpengajuansuratmasuk');
    }
    
    public function tampilSerahkanPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.serahkanpengajuansuratmasuk');
    }
}
