<?php

namespace App\Http\Controllers;

use App\LegalisirIjazah;
use App\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKeluarController extends Controller
{
    public function tampilSuratKeluar() {
        if(Auth::user()->unit_kerja == 'Staf Administrasi Umum') {
            $sks = SuratKeluar::where('penyerahan_kepada', '=', 'Staf Administrasi Umum')->orWhereNull('penyerahan_kepada')->get();
            return view('suratkeluar.suratkeluar', compact('sks'));
        } elseif (Auth::user()->unit_kerja == 'Resepsionis') {
            $sks = SuratKeluar::where('penyerahan_kepada', '=' , 'Resepsionis')->get();
            return view('suratkeluar.suratkeluar', compact('sks'));
        }
    }

    public function tampilTambahSuratKeluar() {
        return view('suratkeluar.tambahsuratkeluar');
    }

    public function tampilEditSuratKeluar($id) {
        $sk = SuratKeluar::where('id', $id)->first();
        return view('suratkeluar.editsuratkeluar', compact('sk'));
    }

    public function tampilDetailSuratKeluar($id) {
        $sk = SuratKeluar::where('id', $id)->first();
        return view('suratkeluar.detailsuratkeluar', compact('sk'));
    }
    
    public function tampilSerahkanSuratKeluar($id) {
        $sk = SuratKeluar::where('id', $id)->first();
        return view('suratkeluar.serahkansuratkeluar', compact('sk'));
    }

    public function tambahSuratKeluar(Request $request) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
       ]);
       $nama_file = time() . '-' . $request->file->getClientOriginalName();
       $request->file->move(public_path('upload'), $nama_file);


        SuratKeluar::create([
            'nomor_surat' => $request->nomor_surat,
            'tanggal_surat' => $request->tanggal_surat,
            'sifat_surat' => $request->sifat_surat,
            'perihal' => $request->perihal,
            'file' => $nama_file
        ]);

        return redirect('/suratkeluar');
    }

    public function editSuratKeluar(Request $request, $id) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
       ]);
       $sk = SuratKeluar::find($id);
       if($request->file) {
        $nama_file = time() . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $nama_file);
        $sk->file = $nama_file;
        }

        $sk->nomor_surat = $request->nomor_surat;
        $sk->tanggal_surat = $request->tanggal_surat;
        $sk->sifat_surat = $request->sifat_surat;
        $sk->perihal = $request->perihal;
        $sk->file = $request->file;
        $sk->save();

        return redirect('/suratkeluar');

    }

    public function serahkanSuratKeluar(Request $request, $id) {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat_surat' => 'required',
            'perihal' => 'required',
            'file' => 'required',
            'penyerahan_kepada' => 'required'
       ]);

        $sk = SuratKeluar::find($id);
        $sk->nomor_surat = $request->nomor_surat;
        $sk->tanggal_surat = $request->tanggal_surat;
        $sk->sifat_surat = $request->sifat_surat;
        $sk->perihal = $request->perihal;
        $sk->file = $request->file;
        $sk->penyerahan_kepada = $request->penyerahan_kepada;
        $sk->catatan = $request->catatan;
        $sk->save();

        return redirect('/suratkeluar');
    }

    public function deleteSuratKeluar($id)
    {
        SuratKeluar::destroy($id);
        return back();
    }

    public function download($file){
        return response()->download('upload/'.$file);
    }

}
