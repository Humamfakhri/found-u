<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function show() {
        return view('user.login');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)) {
            $akun = Auth::user();
            if ($akun->role == 1) {
                return redirect('/dashboard')->with('success', 'Sukses login sebagai admin');
                // Jang middleware, ku urang ditambahan prefix mun middleware na hurung
                // return redirect('/admin/dashboard')->with('success', 'Sukses login sebagai admin');
            } elseif ($akun->role == 0) {
                return redirect('/')->with('success', 'Sukses login sebagai admin');
            }
        } else {
            return redirect('/login')->with('error', 'Username / Password anda salah');
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('/')->with('logoutsuccess', 'Anda telah Logout');
    }
}
