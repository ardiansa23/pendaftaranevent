<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('Front.wellcome');})->name('home');
Route::get('/', [FrontController::class, 'index'])->name('Front.wellcome');

Route::get('/event/Register', function () {
    return view('event.Register');
})->name('event.register.post');

Route::post('event/Register', [EventController::class, 'index'])->name('event.register');
Route::post('event/Register/berhasil', [EventController::class, 'registerpeserta'])->name('submit.event');



// Grouping routes for admin with middleware 'auth:admin' (only accessible if logged in as admin)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/peserta', [AdminDashboardController::class, 'index'])->name('admin.peserta');
    Route::get('/peserta/detail/{id}', [AdminDashboardController::class, 'show'])->name('admin.detail');

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
