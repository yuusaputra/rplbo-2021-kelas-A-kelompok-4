<?php

namespace App\Http\Controllers;

use App\LegalisirIjazah;
use App\SuratKeluar;
use App\SuratMasuk;
use Illuminate\Http\Request;

class StatusSuratController extends Controller
{
    public function tampilStatusSuratMasuk() {
        $sms = SuratMasuk::all();
        return view('status.statussuratmasuk', compact('sms'));
    }

    public function tampilStatusSuratKeluar() {
        $sks = SuratKeluar::all();
        return view('status.statussuratkeluar', compact('sks'));
    }

    public function tampilStatusLegalisirIjazah() {
        $ijazahs = LegalisirIjazah::all();
        return view('status.statuslegalisirijazah', compact('ijazahs'));
    }

    public function tampilInformasiSuratMasuk($id) {
        $sm = SuratMasuk::where('id', $id)->first();
        return view('status.informasisuratmasuk', compact('sm'));
    }

    public function tampilInformasiSuratKeluar($id) {
        $sk = SuratKeluar::where('id', $id)->first();
        return view('status.informasisuratkeluar', compact('sk'));
    }

    public function tampilInformasiLegalisirIjazah($id) {
        $ijazah = LegalisirIjazah::where('id', $id)->first();
        return view('status.informasilegalisirijazah', compact('ijazah'));
    }



}
