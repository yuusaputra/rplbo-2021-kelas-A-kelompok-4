<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalisirIjazahController extends Controller
{
    public function tampilLegalisirIjazah() {
        return view('legalisirijazah.legalisirijazah');
    }

    public function tampilTambahLegalisirIjazah() {
        return view('legalisirijazah.tambahlegalisirijazah');
    }

    public function tampilEditLegalisirIjazah() {
        return view('legalisirijazah.editlegalisirijazah');
    }

    public function tampilDetailLegalisirIjazah() {
        return view('legalisirijazah.detaillegalisirijazah');
    }
    
    public function tampilSerahkanLegalisirIjazah() {
        return view('legalisirijazah.serahkanlegalisirijazah');
    }
}
