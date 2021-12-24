<?php

namespace App\Http\Controllers;

use App\LegalisirIjazah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilLegalisirIjazahController extends Controller
{
    public function tampilHasilLegalisirIjazah() {
        if(Auth::user()->unit_kerja == 'Resepsionis') {
            $ijazahs = LegalisirIjazah::where('penyerahan_kepada', '=', 'Resepsionis')->get();
            return view('hasil.hasillegalisirijazah', compact('ijazahs'));
        }
    }

    public function download($file){
        return response()->download('upload/'.$file);
    }
}
