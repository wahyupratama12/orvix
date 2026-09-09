@extends('layouts.master')

@section('konten_utama')
    <h2 style="color: #333; margin-bottom: 20px;">Katalog Produk</h2>

    <!-- KOTAK PRODUK -->
    <!-- Ganti width: 250px sesuai ukuran W (Width) di Figma kalian -->
    <div style="background-color: white; border: 1px solid #ccc; width: 250px; padding: 15px; border-radius: 8px;">
        <img src="{{ asset('assets/produk.jpg') }}" alt="Foto Produk"
            style="width: 100%; aspect-ratio: 3 / 4; object-fit: cover; border-radius: 4px;">
        <h3 style="margin-top: 15px;">Nama Sepatu/Baju</h3>
        <p style="color: #E63946; font-weight: bold; font-size: 18px;">Rp 150.000</p>

        <!-- Pintu menuju halaman Detail -->
        <a href="/detail"
            style="display: block; text-align: center; background-color: #0B5ED7; color: white; padding: 10px; text-decoration: none; border-radius: 5px; font-weight: bold;">
            Lihat Detail
        </a>
    </div>
@endsection
