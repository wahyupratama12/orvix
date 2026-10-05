@extends('layouts.master')

@section('konten_utama')
    <h2>Katalog Produk</h2>

    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <!-- BUKA MESIN LOOPING -->
        @forelse ($products as $product)
            <!-- DESAIN KOTAK PRODUK -->
            <div style="background-color: white; border: 1px solid #ccc; width: 250px; padding: 15px; border-radius: 8px;">

                @if ($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}"
                        style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                @else
                    <div style="background:#eee; height:150px; text-align:center; line-height: 150px;">Tanpa Gambar</div>
                @endif

                <!-- NAMA PRODUK -->
                <h3 style="margin-top: 15px;">{{ $product->name }}</h3>

                <!-- HARGA PRODUK (Format Rupiah) -->
                <p style="color: red; font-weight: bold;">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                <!-- TOMBOL DETAIL -->
                <a href="{{ route('detail', ['product' => $product->id]) }}"
                    style="display: block; text-align: center; background-color: #0B5ED7; color: white; padding: 10px; text-decoration: none; border-radius: 5px;">Lihat
                    Detail</a>
            </div>
        @empty
            <!-- TAMPILAN JIKA DATABASE KOSONG (EMPTY STATE) -->
            <div style="text-align: center; width: 100%; padding: 50px;">
                <h3 style="color: #888;">Mohon maaf, produk belum tersedia di etalase kami.</h3>
            </div>
        @endforelse
        <!-- TUTUP MESIN LOOPING -->
    </div>
@endsection
