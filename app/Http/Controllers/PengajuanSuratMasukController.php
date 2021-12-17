<?php

namespace App\Http\Controllers;

use App\PengajuanSuratMasuk;
use Illuminate\Http\Request;

class PengajuanSuratMasukController extends Controller
{
    public function tampilPengajuanSuratMasuk() {
        $psms = PengajuanSuratMasuk::all();
        return view('pengajuansuratmasuk.pengajuansuratmasuk', compact('psms'));
    }

    public function tampilTambahPengajuanSuratMasuk() {
        return view('pengajuansuratmasuk.tambahpengajuansuratmasuk');
    }

    public function tampilEditPengajuanSuratMasuk($id) {
        $psm = PengajuanSuratMasuk::findOrFail($id);
        return view('pengajuansuratmasuk.editpengajuansuratmasuk', compact('psm'));
    }

    public function tampilDetailPengajuanSuratMasuk($id) {
        $psm = PengajuanSuratMasuk::where('id', $id)->first();
        return view('pengajuansuratmasuk.detailpengajuansuratmasuk', compact('psm'));
    }
    
    public function tampilSerahkanPengajuanSuratMasuk($id) {
        $psm = PengajuanSuratMasuk::where('id', $id)->first();
        return view('pengajuansuratmasuk.serahkanpengajuansuratmasuk', compact('psm'));
    }

    public function tambahPengajuanSuratMasuk(Request $request) {
        $request->validate([
            'nama_pengirim' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'tanggal_kunjungan' => 'required',
            'isi_ringkasan_surat' => 'required',
            'file' => 'required',
       ]);
        
        $psm = $request->only([
            'nama_pengirim',
            'instansi',
            'jabatan',
            'tanggal_kunjungan',
            'isi_ringkasan_surat',
            'file'
        ]);

        $user = PengajuanSuratMasuk::create($psm);

        return redirect('/pengajuansuratmasuk');
    }

    public function editPengajuanSuratMasuk(Request $request, $id) {
        $request->validate([
            'nama_pengirim' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'tanggal_kunjungan' => 'required',
            'isi_ringkasan_surat' => 'required',
            'file' => 'required',
       ]);

        $psm = PengajuanSuratMasuk::find($id);
        $psm->nama_pengirim = $request->nama_pengirim;
        $psm->instansi = $request->instansi;
        $psm->jabatan = $request->jabatan;
        $psm->tanggal_kunjungan = $request->tanggal_kunjungan;
        $psm->isi_ringkasan_surat = $request->isi_ringkasan_surat;
        $psm->file = $request->file;
        $psm->save();

        return redirect('/pengajuansuratmasuk');

    }

    public function serahkanPengajuanSuratMasuk(Request $request, $id) {
        $request->validate([
            'nama_pengirim' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'tanggal_kunjungan' => 'required',
            'isi_ringkasan_surat' => 'required',
            'file' => 'required',
            'penyerahan_kepada' => 'required'
       ]);

        $psm = PengajuanSuratMasuk::find($id);
        $psm->nama_pengirim = $request->nama_pengirim;
        $psm->instansi = $request->instansi;
        $psm->jabatan = $request->jabatan;
        $psm->tanggal_kunjungan = $request->tanggal_kunjungan;
        $psm->isi_ringkasan_surat = $request->isi_ringkasan_surat;
        $psm->file = $request->file;
        $psm->penyerahan_kepada = $request->penyerahan_kepada;
        $psm->catatan = $request->catatan;
        $psm->save();

        return redirect('/pengajuansuratmasuk');
    }

    public function deletePengajuanSuratMasuk($id)
    {
        PengajuanSuratMasuk::destroy($id);
        return back();
    }


}
