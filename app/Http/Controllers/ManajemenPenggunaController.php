<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ManajemenPenggunaController extends Controller
{
    public function tampilPengguna() {
        $users = User::all();
        return view('manajemenpengguna.manajemenpengguna', compact('users'));
    }

    public function tampilTambahPengguna() {
        return view('manajemenpengguna.tambahpengguna');
    }

    public function tampilEditPengguna($id) {
        $user = User::where('id', $id)->first();
        return view('manajemenpengguna.editpengguna', compact('user'));
    }

    public function tambahPengguna(Request $request) {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'unit_kerja' => 'required'
       ]);
        
        $userdata = $request->only([
            'username',
            'nama',
            'password',
            'unit_kerja'
        ]);
        $userdata['password'] = bcrypt($userdata['password']);
        $user = User::create($userdata);

        return redirect('/manajemenpengguna');
    }

    public function editPengguna(Request $request, $id) {
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'unit_kerja' => 'required'
       ]);

        $user = User::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        if ($request->password) $user->password = bcrypt($request->password);
        $user->unit_kerja = $request->unit_kerja;
        $user->save();

        return redirect('/manajemenpengguna');
    }

    public function deletePengguna($id) {
        User::destroy($id);
        return back();
    }
}
