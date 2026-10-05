<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Jalur 1: Halaman Katalog (Awal)
Route::get('/', [ProductController::class, 'index'])->name('katalog');

// Jalur 2: Halaman Detail Produk (ambil produk berdasarkan id di URL)
Route::get('/detail/{product}', [ProductController::class, 'show'])
    ->whereNumber('product')
    ->name('detail');

// Jalur 3: Halaman Checkout (produk yang dipilih dari halaman detail)
Route::get('/checkout/{product}', [ProductController::class, 'checkout'])
    ->whereNumber('product')
    ->name('checkout');

// Jalur 4: Halaman Transaksi Berhasil
Route::get('/berhasil', function () {
    return view('berhasil');
})->name('berhasil');
