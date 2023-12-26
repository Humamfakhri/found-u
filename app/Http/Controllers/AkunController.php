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
        // request()->validate(
        //     [
        //         'username' => 'required',
        //         'password' => 'required',
        //     ]
        // );

        // $credential = $request->only('username', 'password');
        // if(Auth::attempt($credential)) {
        //     $akun = Auth::user();
        //     if ($akun->role == 1) {
        //         return redirect('/dashboard');
        //     } elseif ($akun->role == 0) {
        //         return redirect('/');
        //     }
        // } else {
        //     return redirect('/tentang');
        // }

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)) {
            $akun = Auth::user();
            if ($akun->role == 1) {
                return redirect('/dashboard')->with('success', 'Sukses login sebagai admin');
            } elseif ($akun->role == 0) {
                return redirect('/');
            }
            return back()->with('error', 'Username/Password salah');
        }
        
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
