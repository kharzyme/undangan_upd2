<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KehadiranController;

Route::get('/', function () {
    return view('content');
});

// Route untuk menerima data POST dari form
Route::post('/konfirmasi-kehadiran', [KehadiranController::class, 'store'])->name('kehadiran.store');

// Route untuk mengambil SEMUA daftar ucapan (Data lama)
Route::get('/ucapan-list', [KehadiranController::class, 'index'])->name('kehadiran.index');

// Route untuk mengambil data awal (hanya counts)
Route::get('/kehadiran/counts', [KehadiranController::class, 'counts'])->name('kehadiran.counts');