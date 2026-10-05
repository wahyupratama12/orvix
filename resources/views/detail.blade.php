@extends('layouts.master')

@section('konten_utama')
    <a href="{{ route('katalog') }}" style="color: #0B5ED7; text-decoration: none; font-weight: bold;">&larr; Kembali ke Katalog</a>

    <div
        style="display: flex; margin-top: 20px; background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #ccc;">
        <!-- Gambar Kiri (mengambil gambar produk yang dipilih) -->
        @if ($product->image)
            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                style="width: 400px; aspect-ratio: 3 / 4; object-fit: cover; border-radius: 4px;">
        @else
            <div
                style="width: 400px; aspect-ratio: 3 / 4; background: #eee; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #888;">
                Tanpa Gambar
            </div>
        @endif
        <!-- Spesifikasi Kanan -->
        <div style="width: 60%; padding-left: 30px;">
            <h2>{{ $product->name }}</h2>
            <h3 style="color: #E63946;">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
            <p><strong>Spesifikasi:</strong></p>
            <ul>
                <li>Bahan: Material Premium</li>
                <li>Ukuran tersedia: Sesuaikan produk kalian</li>
                <li>Kondisi: Baru 100%</li>
            </ul>
            <p>Deskripsi: {{ $product->description }}</p>

            <!-- Pintu menuju halaman Checkout -->
            <a href="{{ route('checkout', ['product' => $product->id]) }}"
                style="display: inline-block; background-color: #28A745; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px;">
                Beli Sekarang
            </a>
        </div>
    </div>
@endsection