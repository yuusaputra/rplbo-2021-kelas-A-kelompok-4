<?php

namespace App\Http\Controllers;

use App\LegalisirIjazah;
use Illuminate\Http\Request;

class LegalisirIjazahController extends Controller
{
    public function tampilLegalisirIjazah() {
        $ijazahs = LegalisirIjazah::all();
        return view('legalisirijazah.legalisirijazah', compact('ijazahs'));
    }

    public function tampilTambahLegalisirIjazah() {
        return view('legalisirijazah.tambahlegalisirijazah');
    }

    public function tampilEditLegalisirIjazah($id) {
        $ijazah = LegalisirIjazah::where('id', $id)->first();
        return view('legalisirijazah.editlegalisirijazah', compact('ijazah'));
    }

    public function tampilDetailLegalisirIjazah($id) {
        $ijazah = LegalisirIjazah::where('id', $id)->first();
        return view('legalisirijazah.detaillegalisirijazah', compact('ijazah'));
    }
    
    public function tampilSerahkanLegalisirIjazah($id) {
        $ijazah = LegalisirIjazah::where('id', $id)->first();
        return view('legalisirijazah.serahkanlegalisirijazah', compact('ijazah'));
    }

    public function tambahLegalisirIjazah(Request $request) {
        $request->validate([
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'nis' => 'required',
            'tahun_alumni' => 'required',
            'tanggal_kunjungan' => 'required',
            'file' => 'required',
       ]);
        
        $ijazah = $request->only([
            'nama_lengkap',
            'ttl',
            'nis',
            'tahun_alumni',
            'tanggal_kunjungan',
            'file'
        ]);

        $user = LegalisirIjazah::create($ijazah);

        return redirect('/legalisirijazah');
    }

    public function editLegalisirIjazah(Request $request, $id) {
        $request->validate([
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'nis' => 'required',
            'tahun_alumni' => 'required',
            'tanggal_kunjungan' => 'required',
            'file' => 'required',
       ]);

        $ijazah = LegalisirIjazah::find($id);
        $ijazah->nama_lengkap = $request->nama_lengkap;
        $ijazah->ttl = $request->ttl;
        $ijazah->nis = $request->nis;
        $ijazah->tahun_alumni = $request->tahun_alumni;
        $ijazah->tanggal_kunjungan = $request->tanggal_kunjungan;
        $ijazah->file = $request->file;
        $ijazah->save();

        return redirect('/legalisirijazah');

    }

    public function serahkanLegalisirIjazah(Request $request, $id) {
        $request->validate([
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'nis' => 'required',
            'tahun_alumni' => 'required',
            'tanggal_kunjungan' => 'required',
            'file' => 'required',
            'penyerahan_kepada' => 'required'
       ]);

        $ijazah = LegalisirIjazah::find($id);
        $ijazah->nama_lengkap = $request->nama_lengkap;
        $ijazah->ttl = $request->ttl;
        $ijazah->nis = $request->nis;
        $ijazah->tahun_alumni = $request->tahun_alumni;
        $ijazah->tanggal_kunjungan = $request->tanggal_kunjungan;
        $ijazah->file = $request->file;
        $ijazah->penyerahan_kepada = $request->penyerahan_kepada;
        $ijazah->catatan = $request->catatan;
        $ijazah->save();

        return redirect('/legalisirijazah');
    }

    public function deleteLegalisirIjazah($id)
    {
        LegalisirIjazah::destroy($id);
        return back();
    }

}
