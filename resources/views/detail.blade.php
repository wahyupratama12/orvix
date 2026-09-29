@extends('layouts.master')

@section('konten_utama')
    <a href="/" style="color: #0B5ED7; text-decoration: none; font-weight: bold;">&larr; Kembali ke Katalog</a>

    <div
        style="display: flex; margin-top: 20px; background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #ccc;">
        <!-- Gambar Kiri -->
        <img src="{{ asset('assets/produk.jpg') }}" alt="Foto Produk"
            style="width: 400px; aspect-ratio: 3 / 4; object-fit: cover; border-radius: 4px;">
        <!-- Spesifikasi Kanan -->
        <div style="width: 60%; padding-left: 30px;">
            <h2>Celana Baggy</h2>
            <h3 style="color: #E63946;">Rp 150.000</h3>
            <p><strong>Spesifikasi:</strong></p>
            <ul>
                <li>Bahan: Material Premium</li>
                <li>Ukuran tersedia: Sesuaikan produk kalian</li>
                <li>Kondisi: Baru 100%</li>
            </ul>
            <p>Deskripsi: Tuliskan rincian produk yang membuat pembeli tertarik di sini.</p>

            <!-- Pintu menuju halaman Checkout -->
            <a href="/checkout"
                style="display: inline-block; background-color: #28A745; color: white; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px;">
                Beli Sekarang
            </a>
        </div>
    </div>
@endsection
