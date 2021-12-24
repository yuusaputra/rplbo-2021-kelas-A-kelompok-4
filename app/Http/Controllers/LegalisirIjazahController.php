<?php

namespace App\Http\Controllers;

use App\LegalisirIjazah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LegalisirIjazahController extends Controller
{
    public function tampilLegalisirIjazah() {
        if(Auth::user()->unit_kerja == 'Resepsionis') {
            $ijazahs = LegalisirIjazah::where('penyerahan_kepada', '=', 'Resepsionis')->orWhereNull('penyerahan_kepada')->get();
            return view('legalisirijazah.legalisirijazah', compact('ijazahs'));
        } elseif (Auth::user()->unit_kerja == 'Staf Administrasi Umum') {
            $ijazahs = LegalisirIjazah::where('penyerahan_kepada', '=' , 'Staf Administrasi Umum')->get();
            return view('legalisirijazah.legalisirijazah', compact('ijazahs'));
        } elseif (Auth::user()->unit_kerja == 'Kepala Sekolah') {
            $ijazahs = LegalisirIjazah::where('penyerahan_kepada', '=' , 'Kepala Sekolah')->get();
            return view('legalisirijazah.legalisirijazah', compact('ijazahs'));
        }
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
        $nama_file = time() . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $nama_file);

        LegalisirIjazah::create([
            'nama_lengkap' => $request->nama_lengkap,
            'ttl' => $request->ttl,
            'nis' => $request->nis,
            'tahun_alumni' => $request->tahun_alumni,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'file' => $nama_file
        ]);

        return redirect('/legalisirijazah');
    }

    public function editLegalisirIjazah(Request $request, $id) {
        $request->validate([
            'nama_lengkap' => 'required',
            'ttl' => 'required',
            'nis' => 'required',
            'tahun_alumni' => 'required',
            'tanggal_kunjungan' => 'required',
       ]);
       $ijazah = LegalisirIjazah::find($id);
       if($request->file) {
        $nama_file = time() . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $nama_file);
        $ijazah->file = $nama_file;
    }

        $ijazah->nama_lengkap = $request->nama_lengkap;
        $ijazah->ttl = $request->ttl;
        $ijazah->nis = $request->nis;
        $ijazah->tahun_alumni = $request->tahun_alumni;
        $ijazah->tanggal_kunjungan = $request->tanggal_kunjungan;
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

    public function download($file){
        return response()->download('upload/'.$file);
    }

}
