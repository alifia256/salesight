<?php

use Illuminate\Support\Facades\Route;

// LANDING PAGE
Route::get('/', function () {
    return view('landing.landing');
});

// OWNER
Route::get('/owner/dashboard', function () {
    return view('owner.dashboard');
})->name('owner.dashboard');

Route::get('/owner/tren-global', function () {
    return view('owner.tren-penjualan-global');
})->name('owner.tren-global');

Route::get('/owner/tren-penjualan-toko', function () {
    return view('owner.tren-penjualan-toko');
})->name('owner.tren-toko');

Route::get('/owner/kontribusi-toko', function () {
    return view('owner.kontribusi-toko');
})->name('owner.kontribusi-toko');