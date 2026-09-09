<?php

use Illuminate\Support\Facades\Route;

// Jalur 1: Halaman Katalog (Awal)
Route::get('/', function () {
    return view('katalog');
});

// Jalur 2: Halaman Detail Produk
Route::get('/detail', function () {
    return view('detail');
});

// Jalur 3: Halaman Checkout
Route::get('/checkout', function () {
    return view('checkout');
});

// Jalur 4: Halaman Transaksi Berhasil
Route::get('/berhasil', function () {
    return view('berhasil');
});