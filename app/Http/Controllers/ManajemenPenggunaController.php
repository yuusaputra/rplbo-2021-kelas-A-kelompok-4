<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenPenggunaController extends Controller
{
    public function tampilPengguna() {
        return view('manajemenpengguna.manajemenpengguna');
    }

    public function tampilTambahPengguna() {
        return view('manajemenpengguna.tambahpengguna');
    }

    public function tampilEditPengguna() {
        return view('manajemenpengguna.editpengguna');
    }
}
