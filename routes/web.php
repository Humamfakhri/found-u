<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\MasukanController;
use App\Http\Controllers\PostinganController;


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

// Auth Routes
Route::get('/login', [AkunController::class, 'show'])->name('showLogin');
Route::post('/loginProcess', [AkunController::class, 'login'])->name('login');
Route::get('/logout', [AkunController::class, 'logout'])->name('logout');

// Route::middleware('roleCheck:1')->group( function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// }); 

Route::get('/', function () {
    return view('user.beranda');
})->name('beranda');

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
