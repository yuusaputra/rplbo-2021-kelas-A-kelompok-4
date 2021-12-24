<?php

namespace App\Http\Controllers;

use App\PengajuanSuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanSuratKeluarController extends Controller
{
    public function tampilPengajuanSuratKeluar() {
        if(Auth::user()->unit_kerja == 'Staf Administrasi Umum') {
            $psks = PengajuanSuratKeluar::where('penyerahan_kepada', '=', 'Staf Administrasi Umum')->orWhereNull('penyerahan_kepada')->get();
            return view('pengajuansuratkeluar.pengajuansuratkeluar', compact('psks'));
        } elseif (Auth::user()->unit_kerja == 'Kepala Tata Usaha') {
            $psks = PengajuanSuratKeluar::where('penyerahan_kepada', '=' , 'Kepala Tata Usaha')->get();
            return view('pengajuansuratkeluar.pengajuansuratkeluar', compact('psks'));
        } elseif (Auth::user()->unit_kerja == 'Kepala Sekolah') {
            $psks = PengajuanSuratKeluar::where('penyerahan_kepada', '=' , 'Kepala Sekolah')->get();
            return view('pengajuansuratkeluar.pengajuansuratkeluar', compact('psks'));
        }
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

       $nama_file = time() . '-' . $request->file->getClientOriginalName();
       $request->file->move(public_path('upload'), $nama_file);

       PengajuanSuratKeluar::create([
        'nama_pengetik' => $request->nama_pengetik,
        'nip' => $request->nip,
        'konsep' => $request->konsep,
        'tanggal_kunjungan' => $request->tanggal_kunjungan,
        'isi_ringkasan_surat' => $request->isi_ringkasan_surat,
        'file' => $nama_file
    ]);

        return redirect('/pengajuansuratkeluar');
    }

    public function editPengajuanSuratKeluar(Request $request, $id) {
        $request->validate([
            'nama_pengetik' => 'required',
            'nip' => 'required',
            'konsep' => 'required',
       ]);

       $psk = PengajuanSuratKeluar::find($id);
       if($request->file) {
        $nama_file = time() . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $nama_file);
        $psk->file = $nama_file;
    }

        $psk->nama_pengetik = $request->nama_pengetik;
        $psk->nip = $request->nip;
        $psk->konsep = $request->konsep;
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

    public function download($file){
        return response()->download('upload/'.$file);
    }
}
