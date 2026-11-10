<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_code');      // Menyimpan Nomor Resi/Invoice (Contoh: INV-2026-001)
            $table->integer('product_id');       // Menyimpan ID Barang yang dibeli
            $table->string('product_name');      // Menyimpan Nama Barang saat dibeli
            $table->string('customer_name');     // Menyimpan Nama Lengkap Pembeli
            $table->string('customer_phone');    // Menyimpan Nomor HP/WA Pembeli[cite: 6]
            $table->text('customer_address');    // Menyimpan Alamat Pengiriman[cite: 6]
            $table->string('courier');           // Menyimpan Kurir (JNE / J&T / SiCepat)[cite: 6]
            $table->integer('quantity');         // Menyimpan Jumlah Beli[cite: 6]
            $table->integer('shipping_cost');    // Menyimpan Ongkos Kirim[cite: 6]
            $table->integer('total_amount');     // Menyimpan Total Bayar (Harga x Qty + Ongkir)[cite: 6]
            $table->string('status')->default('Pending'); // Status pesanan awal[cite: 6]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
