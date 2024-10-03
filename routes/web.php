<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;

//tampilan awal event
Route::get('/', function () {
    return view('Front.wellcome');})->name('home');
Route::get('/', [FrontController::class, 'index'])->name('Front.wellcome');

//fungsi untuk menjalamankan tampilan laman form register
Route::get('/event/Register', function () {
    return view('event.Register');
})->name('event.register.post');
//fungsi untuk menampilkan laman form register
Route::post('/event/Register', [EventController::class, 'index'])->name('event.register');
//fungsi untuk memproses (simpan data)
Route::post('event/Register/berhasil', [EventController::class, 'registerpeserta'])->name('submit.event');
//menmapilkan laman pembayaran
Route::get('/event/payment', function () {
    return view('event.pembayaran'); // Ganti dengan nama view pembayaran Anda
})->name('event.pembayaran');
// Route::get('event/pembayaran',[EventController::class,'pembayaran'])->name('pembayaran');


// Grouping routes for admin with middleware 'auth:admin' hanya admin yang bisa login
Route::middleware('auth:admin')->group(function () {
    //masuk kelaman peserta
    Route::get('/admin/peserta', [AdminDashboardController::class, 'index'])->name('admin.peserta');
    //menampilkan detail peserta
    Route::get('/peserta/detail/{id}', [AdminDashboardController::class, 'show'])->name('admin.detail');
    //menghapus peserta
    Route::delete('/peserta/{id}', [AdminDashboardController::class, 'destroy'])->name('peserta.destroy');

    // Admin logout route
    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});


// Admin login routes (available without auth)
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// General user logout route
Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
