<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function tampilSuratKeluar() {
        return view('suratkeluar.suratkeluar');
    }

    public function tampilTambahSuratKeluar() {
        return view('suratkeluar.tambahsuratkeluar');
    }

    public function tampilEditSuratKeluar() {
        return view('suratkeluar.editsuratkeluar');
    }

    public function tampilDetailSuratKeluar() {
        return view('suratkeluar.detailsuratkeluar');
    }
    
    public function tampilSerahkanSuratKeluar() {
        return view('suratkeluar.serahkansuratkeluar');
    }
}
