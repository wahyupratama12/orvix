<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/berhasil', function () {
    return view('berhasil');
})->name('berhasil');

Route::get('/admin/transactions', [AdminController::class, 'transactions']);
Route::post('/admin/transactions/{id}/status', [AdminController::class, 'updateStatus']);

Route::get('/admin/products', [AdminController::class, 'products']);
Route::get('/admin/products/create', [AdminController::class, 'createProduct']);
Route::post('/admin/products/store', [AdminController::class, 'storeProduct']);

Route::get('/admin/products/{id}/edit', [AdminController::class, 'editProduct']);
Route::post('/admin/products/{id}/update', [AdminController::class, 'updateProduct']);
Route::post('/admin/products/{id}/delete', [AdminController::class, 'deleteProduct']);
