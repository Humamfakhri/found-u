<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function postingan() {
        return view('admin.postingan');
    }

    public function masukan() {
        return view('admin.masukan');
    }

    public function faq() {
        return view('admin.faq');
    }
}
