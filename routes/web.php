<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// LOGIN
Route::get('/login', function () {
    return view('login.login');
})->name('login');

// REGISTER
Route::get('/register', function () {
    return view('register.register');
})->name('register');


/*
|--------------------------------------------------------------------------
| OWNER
|--------------------------------------------------------------------------
*/

Route::prefix('owner')->group(function () {

    Route::get('/dashboard', function () {
        return view('owner.dashboard');
    })->name('owner.dashboard');

    Route::get('/tren-global', function () {
        return view('owner.tren-penjualan-global');
    })->name('owner.tren-global');

    Route::get('/tren-penjualan-toko', function () {
        return view('owner.tren-penjualan-toko');
    })->name('owner.tren-toko');

    Route::get('/kontribusi-toko', function () {
        return view('owner.kontribusi-toko');
    })->name('owner.kontribusi-toko');

});