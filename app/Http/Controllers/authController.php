<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    function index() {
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!'
        ]);

        // Proses Cek
        $infoLogin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // Proses Login
        if (Auth()->attempt($infoLogin) && Auth()->user()->role == 2) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors('Username atau password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout() {
        Auth()->logout();
        return redirect('/login');
    }
}
