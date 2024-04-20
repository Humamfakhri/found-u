<?php

use App\Http\Controllers\PostinganController;
use App\Http\Controllers\MasukanController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotifikasiController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/storageLink', function() {
    Artisan::call('storage:link');
});

Route::get('/npm-install', function() {
    // Menjalankan perintah npm install
    Artisan::call('npm:install');

    // Menampilkan pesan sukses atau gagal
    return 'npm install telah berhasil dijalankan.';
});


// Login 
Route::middleware('guest')->group(function () {
    Route::get('/login', [AkunController::class, 'show'])->name('showLogin');
    Route::post('/loginProcess', [AkunController::class, 'login'])->name('login');
});

// Logout
Route::get('/logout', [AkunController::class, 'logout'])->name('logout');

// Route user
Route::get('/', [PostinganController::class, "beranda"])->name("beranda");
Route::get('/kehilangan', [PostinganController::class, "kehilangan"])->name("kehilangan");
Route::get('/ditemukan', [PostinganController::class, "ditemukan"])->name("ditemukan");
Route::get('/tentang', [PostinganController::class, "tentang"])->name("tentang");
Route::get('/notifikasi', [PostinganController::class, "notifikasi"])->name("notifikasi");
Route::post('/update-notifikasi', [PostinganController::class, "notifikasiUpdate"])->name("notifikasi");

// POSTINGAN \\
Route::post('postingan', [PostinganController::class, "store"])->name("postingan.store");
Route::put('postingan/{id_postingan}', [PostinganController::class, "update"])->name("postingan.update");
Route::delete('postingan/{id_postingan}', [PostinganController::class, "delete"])->name("postingan.delete");
// Route::post('postingan/{id}/edit', [PostinganController::class, "store"])->name("postingan.edit");

// ADMIN
Route::middleware('admin')->group(function () {
    Route::get('/{admin_url}', [PostinganController::class, "admin_url"])->where('admin_url', '(dashboard|postingan|masukan|faq)')->name('admin_pages');
});

// MASUKAN \\
Route::post('masukan', [MasukanController::class, "store"])->name("masukan.store");
Route::put('masukan/{id_masukan}', [MasukanController::class, "update"])->name("masukan.update");
Route::delete('masukan/{id_masukan}', [MasukanController::class, "delete"])->name("masukan.destroy");


// Middleware
// Route::group(['prefix' => 'admin', 'middleware' => ['roleCheck:1'], 'as' => 'admin'], function() {
//     Route::get('/dashboard', [AdminController::class, 'dashboard']);
//     Route::get('/postingan', [AdminController::class, 'postingan']);
//     Route::get('/masukan', [AdminController::class, 'masukan']);
//     Route::get('/faq', [AdminController::class, 'faq']);
// });