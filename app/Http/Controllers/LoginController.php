<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function tampilHalamanLogin() {
        return view('login');
    }

    public function login(Request $request) {
        // dd($request->all());

        // $data = User::where('username', $request->username)->firstOrFail();
        // if($data) {
        //     if(Hash::check($request->password, $data->password)) {
        //         session(['berhasil_login' => 'true']);
        //         return redirect('/beranda');
        //     } else {

        //     }
        // }
        // return redirect('/')->with('message', 'Username atau Password salah');

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/beranda');
        }
        return redirect('/')->with('message', 'Username atau Password salah');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
