<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('katalog', compact('products'));
    }

    public function show($id)
    {
        // Mengambil data produk berdasarkan ID, jika tidak ada akan otomatis melempar 404
        $product = Product::findOrFail($id);

        return view('detail', compact('product'));
    }

    public function checkout(Product $product)
    {
        return view('checkout', compact('product'));
    }
}
