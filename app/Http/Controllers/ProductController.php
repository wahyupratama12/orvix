<?php

namespace App\Http\Controllers;

use App\Models\Product; // Panggil Model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('katalog', compact('products'));
    }

    public function show(Product $product)
    {
        return view('detail', compact('product'));
    }

    public function checkout(Product $product)
    {
        return view('checkout', compact('product'));
    }
}
