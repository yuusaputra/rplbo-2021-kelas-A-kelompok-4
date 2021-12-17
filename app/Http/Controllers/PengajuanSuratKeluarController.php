<?php

namespace App\Http\Controllers;

use App\PengajuanSuratKeluar;
use Illuminate\Http\Request;

class PengajuanSuratKeluarController extends Controller
{
    public function tampilPengajuanSuratKeluar() {
        $psks = PengajuanSuratKeluar::all();
        return view('pengajuansuratkeluar.pengajuansuratkeluar', compact('psks'));
    }

    public function tampilTambahPengajuanSuratKeluar() {
        return view('pengajuansuratkeluar.tambahpengajuansuratkeluar');
    }

    public function tampilEditPengajuanSuratKeluar($id) {
        $psk = PengajuanSuratKeluar::where('id', $id)->first();
        return view('pengajuansuratkeluar.editpengajuansuratkeluar', compact('psk'));
    }

    public function tampilDetailPengajuanSuratKeluar($id) {
        $psk = PengajuanSuratKeluar::where('id', $id)->first();
        return view('pengajuansuratkeluar.detailpengajuansuratkeluar', compact('psk'));
    }
    
    public function tampilSerahkanPengajuanSuratKeluar($id) {
        $psk = PengajuanSuratKeluar::where('id', $id)->first();
        return view('pengajuansuratkeluar.serahkanpengajuansuratkeluar', compact('psk'));
    }

    public function tambahPengajuanSuratKeluar(Request $request) {
        $request->validate([
            'nama_pengetik' => 'required',
            'nip' => 'required',
            'konsep' => 'required',
            'file' => 'required',
       ]);
        
        $psk = $request->only([
            'nama_pengetik',
            'nip',
            'jabatan',
            'konsep',
            'file'
        ]);

        $user = PengajuanSuratKeluar::create($psk);

        return redirect('/pengajuansuratkeluar');
    }

    public function editPengajuanSuratKeluar(Request $request, $id) {
        $request->validate([
            'nama_pengetik' => 'required',
            'nip' => 'required',
            'konsep' => 'required',
            'file' => 'required',
       ]);

        $psk = PengajuanSuratKeluar::find($id);
        $psk->nama_pengetik = $request->nama_pengetik;
        $psk->nip = $request->nip;
        $psk->konsep = $request->konsep;
        $psk->file = $request->file;
        $psk->save();

        return redirect('/pengajuansuratkeluar');

    }

    public function serahkanPengajuanSuratKeluar(Request $request, $id) {
        $request->validate([
            'nama_pengetik' => 'required',
            'nip' => 'required',
            'konsep' => 'required',
            'file' => 'required',
            'penyerahan_kepada' => 'required'
       ]);

        $psk = PengajuanSuratKeluar::find($id);
        $psk->nama_pengetik = $request->nama_pengetik;
        $psk->nip = $request->nip;
        $psk->konsep = $request->konsep;
        $psk->penyerahan_kepada = $request->penyerahan_kepada;
        $psk->catatan = $request->catatan;
        $psk->file = $request->file;
        $psk->save();

        return redirect('/pengajuansuratkeluar');

    }

    public function deletePengajuanSuratKeluar($id) {
        PengajuanSuratKeluar::destroy($id);
        return back();
    }
}
