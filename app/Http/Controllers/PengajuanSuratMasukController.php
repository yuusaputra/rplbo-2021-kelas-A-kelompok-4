<?php

namespace App\Http\Controllers;

use App\PengajuanSuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanSuratMasukController extends Controller
{
    public function tampilPengajuanSuratMasuk() {
        if(Auth::user()->unit_kerja == 'Resepsionis') {
            $psms = PengajuanSuratMasuk::where('penyerahan_kepada', '=', 'Resepsionis')->orWhereNull('penyerahan_kepada')->get();
            return view('pengajuansuratmasuk.pengajuansuratmasuk', compact('psms'));
        } elseif (Auth::user()->unit_kerja == 'Staf Administrasi Umum') {
            $psms = PengajuanSuratMasuk::where('penyerahan_kepada', '=' , 'Staf Administrasi Umum')->get();
            return view('pengajuansuratmasuk.pengajuansuratmasuk', compact('psms'));
        }
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
            'file' => 'required'
       ]);

       $nama_file = time() . '-' . $request->file->getClientOriginalName();
       $request->file->move(public_path('upload'), $nama_file);
        
        // $psm = $request->only([
        //     'nama_pengirim',
        //     'instansi',
        //     'jabatan',
        //     'tanggal_kunjungan',
        //     'isi_ringkasan_surat',
        //     'file'
        // ]);
        PengajuanSuratMasuk::create([
            'nama_pengirim' => $request->nama_pengirim,
            'instansi' => $request->instansi,
            'jabatan' => $request->jabatan,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'isi_ringkasan_surat' => $request->isi_ringkasan_surat,
            'file' => $nama_file
        ]);
        return redirect('/pengajuansuratmasuk');
    }

    public function editPengajuanSuratMasuk(Request $request, $id) {
        $request->validate([
            'nama_pengirim' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'tanggal_kunjungan' => 'required',
            'isi_ringkasan_surat' => 'required',
       ]);

        $psm = PengajuanSuratMasuk::find($id);

        if($request->file) {
            $nama_file = time() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('upload'), $nama_file);
            $psm->file = $nama_file;
        }

        $psm->nama_pengirim = $request->nama_pengirim;
        $psm->instansi = $request->instansi;
        $psm->jabatan = $request->jabatan;
        $psm->tanggal_kunjungan = $request->tanggal_kunjungan;
        $psm->isi_ringkasan_surat = $request->isi_ringkasan_surat;

        
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

    public function download($file){
        return response()->download('upload/'.$file);
    }


}
