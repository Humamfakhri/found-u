<?php

use App\Http\Controllers\PostinganController;
use App\Http\Controllers\MasukanController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotifikasiController;


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

// Middleware
// Route::group(['prefix' => 'admin', 'middleware' => ['roleCheck:1'], 'as' => 'admin'], function() {
//     Route::get('/dashboard', [AdminController::class, 'dashboard']);
//     Route::get('/postingan', [AdminController::class, 'postingan']);
//     Route::get('/masukan', [AdminController::class, 'masukan']);
//     Route::get('/faq', [AdminController::class, 'faq']);
// });

// Route user
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


// POSTINGAN \\
Route::post('postingan', [PostinganController::class, "store"])->name("postingan.store");
Route::put('postingan/{id_postingan}', [PostinganController::class, "update"])->name("postingan.update");
// Route::post('postingan/{id}/edit', [PostinganController::class, "store"])->name("postingan.edit");

// ADMIN
Route::get('/{admin_url}', [PostinganController::class, "admin_url"])->where('admin_url', '(dashboard|postingan|masukan|faq)')->name('admin_pages');

// MASUKAN \\
Route::post('masukan', [MasukanController::class, "store"])->name("masukan.store");
Route::delete('masukan/{id_masukan}', [MasukanController::class, "delete"])->name("masukan.destroy");