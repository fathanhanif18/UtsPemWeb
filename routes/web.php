<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\LaporanPasienController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanDaftarController;

Auth::routes();
Route::resource('dokter', DokterController::class);
Route::resource('dokter_create_index', DokterController::class);
Route::resource('pasien_create_index', PasienController::class);
Route::get('profil/{nama}/edit', [Controller::class, 'editt']);
Route::middleware([Authenticate::class])->group(function () {
    Route::resource('pasien', PasienController::class);
    Route::resource('daftar', DaftarController::class);
    Route::resource('laporan-pasien', LaporanPasienController::class);
    Route::resource('laporan-daftar', LaporanDaftarController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    });
Route::get('dokter/1/edit', [Controller::class, 'edit']);
Route::get('dokter/2', [Controller::class, 'ab']);
Route::get('profile', [Controller::class, 'profile']);




