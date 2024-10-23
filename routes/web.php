<?php

// use App\Http\Controllers\PraktekController;

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', [CobaController::class, 'index'])->name('halaman-satu');
Route::get('/halaman2', [CobaController::class, 'halaman2'])->name('page-2');

Route::get('/halaman3', [CobaController::class, 'halaman3'])->name('halaman-ketiga');

// Route::get('/praktek', [PraktekController::class, 'index']);
