<?php

namespace App\Http\Controllers;

use App\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilSuratKeluarController extends Controller
{
    public function tampilHasilSuratKeluar() {
        if(Auth::user()->unit_kerja == 'Resepsionis') {
            $sks = SuratKeluar::where('penyerahan_kepada', '=', 'Resepsionis')->get();
            return view('hasil.hasilsuratkeluar', compact('sks'));
        }
    }

    public function download($file){
        return response()->download('upload/'.$file);
    }
}
