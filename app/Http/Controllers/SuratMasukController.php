<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function tampilSuratMasuk() {
        return view('suratmasuk.suratmasuk');
    }

    public function tampilTambahSuratMasuk() {
        return view('suratmasuk.tambahsuratmasuk');
    }

    public function tampilEditSuratMasuk() {
        return view('suratmasuk.editsuratmasuk');
    }

    public function tampilDetailSuratMasuk() {
        return view('suratmasuk.detailsuratmasuk');
    }
    
    public function tampilSerahkanSuratMasuk() {
        return view('suratmasuk.serahkansuratmasuk');
    }
}
