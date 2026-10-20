@extends('layouts.master')
@section('konten_utama')
    <!-- 1. FITUR BREADCRUMB NAVIGATION (Standar Industri E-Commerce) -->
    <!-- Mencegah Dead-End dan memandu orientasi pengguna -->
    <div style="margin-bottom: 25px; font-size: 14px; color: #666;">
        <a href="/" style="color: #0B5ED7; text-decoration: none;">Katalog
            Utama</a>
        <span style="margin: 0 10px;">/</span>
        <span style="color: #333; font-weight: bold;">{{ $product->name }}</span>
    </div>

    <div
        style="display: flex; margin-top: 20px; background-color: white;
padding: 20px; border-radius: 8px; border: 1px solid #ccc;">

        <!-- BAGIAN KIRI: GAMBAR PRODUK -->
        <div style="width: 40%; text-align: center;">
            @if ($product->image)
                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                    style="width: 100%; height: 400px; object-fit: cover; border-radius: 5px;">
            @else
                <div style="background:#eee; height:150px; text-align:center; line-height: 150px;">Tanpa Gambar</div>
            @endif
        </div>
        <!-- BAGIAN KANAN: SPESIFIKASI DARI DATABASE -->
        <div style="width: 60%; padding-left: 40px;">
            <h1 style="margin-top: 0; font-size: 28px;">{{ $product->name }}</h1>

            <h2 style="color: #E63946; border-bottom: 1px solid #eee;
padding-bottom: 15px;">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </h2>
            <p style="font-weight: bold;">Spesifikasi & Deskripsi:</p>
            <div style="line-height: 1.6; color: #555; text-align: justify;">
                <!-- nl2br untuk membaca format spasi 'Enter' dari database -
                                                    ->
                                                     {!! nl2br(e($product->description)) !!}
                                                     </div>

                                                     <!-- Tombol Keranjang: Bawa ID Produk untuk P7 Nanti -->
                <a href="/checkout/{{ $product->id }}"
                    style="display: inlineblock; background-color: #28A745; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                    + Masukkan Keranjang
                </a>
            </div>
        </div>
    @endsection
