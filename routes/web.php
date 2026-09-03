<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AuthController;

// Halaman Publik
Route::get('/', function () { return view('home'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/kontak', function () { return view('kontak'); });

// Halaman Data Publik
Route::get('/ekskul', [EkskulController::class, 'indexPublic']);
Route::get('/artikel', [ArtikelController::class, 'indexPublic']);
Route::get('/galeri', [GaleriController::class, 'indexPublic']);

// Route Login / Logout
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Admin (Wajib Login)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () { return view('admin.dashboard'); });
    Route::resource('ekskul', EkskulController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('galeri', GaleriController::class);
});