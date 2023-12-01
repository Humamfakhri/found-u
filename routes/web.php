<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::get('/', function () {
    return view('user.beranda');
})->name('');

Route::get('/ditemukan', function () {
    return view('user.ditemukan');
})->name('ditemukan');

Route::get('/kehilangan', function () {
    return view('user.kehilangan');
})->name('kehilangan');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/postingan', function () {
    return view('admin.postingan');
})->name('postingan');

Route::get('/masukan', function () {
    return view('admin.masukan');
})->name('masukan');

Route::get('/faq', function () {
    return view('admin.faq');
})->name('faq');
