@extends('layouts.master')

@section('konten_utama')
    <h2 style="margin-bottom: 20px;">Pengiriman & Pembayaran</h2>

    <div style="background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #ccc; width: 60%;">
        <!-- Pintu menuju halaman Berhasil setelah tombol diklik -->
        <form action="/berhasil" method="GET">
            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold;">Nama Lengkap:</label><br>
                <input type="text" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight: bold;">Alamat Pengiriman:</label><br>
                <textarea style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px;" rows="3" required></textarea>
            </div>

            <hr style="margin: 20px 0;">
            <h3 style="text-align: right;">Total Bayar: <span
                    style="color: #E63946;">Rp {{ number_format($product->price, 0, ',', '.') }}</span></h3>

            <!-- Tombol Konfirmasi -->
            <button type="submit" style="background-color: #FFC107; color: black; padding: 15px; width: 100%; border: none; border-radius: 5px; font-weight: bold; font-size: 16px; cursor: pointer;">
                Konfirmasi Pesanan
            </button>
        </form>
    </div>
@endsection