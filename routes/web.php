<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Jalur 1: Halaman Katalog (Awal)
Route::get('/', [ProductController::class, 'index'])->name('katalog');

Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/checkout/{id}', [ProductController::class, 'checkout']);

Route::post('/checkout/proses', [ProductController::class, 'storeTransaction']);

Route::get('/berhasil/{id}', [ProductController::class, 'success']);

Route::get('/detail/{product}', [ProductController::class, 'show'])
    ->whereNumber('product')
    ->name('detail');

Route::get('/checkout/{product}', [ProductController::class, 'checkout'])
    ->whereNumber('product')
    ->name('checkout');

// Jalur 4: Halaman Transaksi Berhasil
Route::get('/berhasil', function () {
    return view('berhasil');
})->name('berhasil');
