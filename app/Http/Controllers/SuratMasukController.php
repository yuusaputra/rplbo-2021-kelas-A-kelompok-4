<?php

namespace App\Http\Controllers;

use App\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratMasukController extends Controller
{
    public function tampilSuratMasuk() {
        if(Auth::user()->unit_kerja == 'Staf Administrasi Umum') {
            $sms = SuratMasuk::where('penyerahan_kepada', '=', 'Staf Administrasi Umum')->orWhereNull('penyerahan_kepada')->get();
            return view('suratmasuk.suratmasuk', compact('sms'));
        } elseif (Auth::user()->unit_kerja == 'Kepala Tata Usaha') {
            $sms = SuratMasuk::where('penyerahan_kepada', '=' , 'Kepala Tata Usaha')->get();
            return view('suratmasuk.suratmasuk', compact('sms'));
        } elseif (Auth::user()->unit_kerja == 'Kepala Sekolah') {
            $sms = SuratMasuk::where('penyerahan_kepada', '=' , 'Kepala Sekolah')->get();
            return view('suratmasuk.suratmasuk', compact('sms'));
        }
    }

    public function tampilTambahSuratMasuk() {
        return view('suratmasuk.tambahsuratmasuk');
    }

    public function tampilEditSuratMasuk($id) {
        $sm = SuratMasuk::where('id', $id)->first();
        return view('suratmasuk.editsuratmasuk', compact('sm'));
    }

    public function tampilDetailSuratMasuk($id) {
        $sm = SuratMasuk::where('id', $id)->first();
        return view('suratmasuk.detailsuratmasuk', compact('sm'));
    }
    
    public function tampilSerahkanSuratMasuk($id) {
        $sm = SuratMasuk::where('id', $id)->first();
        return view('suratmasuk.serahkansuratmasuk', compact('sm'));
    }

    public function tambahSuratMasuk(Request $request) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
       ]);
       
       $nama_file = time() . '-' . $request->file->getClientOriginalName();
       $request->file->move(public_path('upload'), $nama_file);

       SuratMasuk::create([
        'nomor_surat' => $request->nomor_surat,
        'tanggal_surat' => $request->tanggal_surat,
        'sifat_surat' => $request->sifat_surat,
        'perihal' => $request->perihal,
        'file' => $nama_file
    ]);
    return redirect('/suratmasuk');
    }

    public function editSuratMasuk(Request $request, $id) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
       ]);

        $sm = SuratMasuk::find($id);

        if($request->file) {
            $nama_file = time() . '-' . $request->file->getClientOriginalName();
            $request->file->move(public_path('upload'), $nama_file);
            $sm->file = $nama_file;
        }

        $sm->nomor_surat = $request->nomor_surat;
        $sm->tanggal_surat = $request->tanggal_surat;
        $sm->sifat_surat = $request->sifat_surat;
        $sm->perihal = $request->perihal;
        
        $sm->save();

        return redirect('/suratmasuk');

    }

    public function serahkanSuratMasuk(Request $request, $id) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'penyerahan_kepada' => 'required'
       ]);

        $sm = SuratMasuk::find($id);
        $sm->nomor_surat = $request->nomor_surat;
        $sm->tanggal_surat = $request->tanggal_surat;
        $sm->sifat_surat = $request->sifat_surat;
        $sm->perihal = $request->perihal;
        $sm->file = $request->file;
        $sm->penyerahan_kepada = $request->penyerahan_kepada;
        $sm->catatan = $request->catatan;
        $sm->save();

        return redirect('/suratmasuk');
    }

    public function deleteSuratMasuk($id)
    {
        SuratMasuk::destroy($id);
        return back();
    }

    public function download($file){
        return response()->download('upload/'.$file);
    }


}
