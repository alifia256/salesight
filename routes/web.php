<?php

use Illuminate\Support\Facades\Route;

// OWNER
Route::get('/owner/dashboard', function () {
    return view('owner.dashboard');
})->name('owner.dashboard');

Route::get('/owner/tren-global', function () {
    return view('owner.tren-penjualan-global');
})->name('owner.tren-global');