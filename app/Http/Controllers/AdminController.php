<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function transactions()
    {
        $transactions = Transaction::latest()->get();
        $totalProducts = Product::count();
        $totalTransactions = Transaction::count();
        $totalRevenue = Transaction::sum('total_amount');

        return view('admin.transactions', compact(
            'transactions',
            'totalProducts',
            'totalTransactions',
            'totalRevenue'
        ));
    }

    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->update([
            'status' => $request->status,
        ]);

        return back()->with(
            'success',
            'Status pesanan '.$transaction->invoice_code.' atas nama '.$transaction->customer_name.' berhasil diubah menjadi: '.$request->status
        );
    }

    public function products()
    {
        $products = Product::latest()->get();

        return view('admin.products', compact('products'));
    }

    public function createProduct()
    {
        return view('admin.create_product');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:150',
            'price' => 'required|numeric|min:100',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time().'_'.str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('assets/images'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/admin/products')->with(
            'success',
            'Produk "'.$request->name.'" berhasil ditambahkan dan langsung tayang di etalase toko!'
        );
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.edit_product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:150',
            'price' => 'required|numeric|min:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imageName = $product->image;

        if ($request->hasFile('image')) {
            if ($product->image && file_exists(public_path('assets/images/'.$product->image))) {
                unlink(public_path('assets/images/'.$product->image));
            }

            $file = $request->file('image');
            $imageName = time().'_'.str_replace(' ', '_', $file->getClientOriginalName());
            $file->move(public_path('assets/images'), $imageName);
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/admin/products')->with(
            'success',
            'Perubahan pada produk "'.$product->name.'" berhasil disimpan!'
        );
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $deletedName = $product->name;

        if ($product->image && file_exists(public_path('assets/images/'.$product->image))) {
            unlink(public_path('assets/images/'.$product->image));
        }

        $product->delete();

        return redirect('/admin/products')->with(
            'success',
            'Produk "'.$deletedName.'" beserta file fotonya berhasil dihapus permanen dari sistem.'
        );
    }
}
