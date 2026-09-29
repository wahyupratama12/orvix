<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Jalur 1: Halaman Katalog (Awal)
Route::get('/', [ProductController::class, 'index']);

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
