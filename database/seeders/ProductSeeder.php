<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Sepatu Sneakers Casual',
            'description' => 'Sepatu ringan cocok untuk nongkrong dan daily wear.',
            'price' => 250000,
            'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500'
        ]);

        Product::create([
            'name' => 'Jaket Denim Vintage',
            'description' => 'Jaket bahan denim premium tebal dan tahan lama.',
            'price' => 320000,
            'image' => 'https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=500'
        ]);

        Product::create([
            'name' => 'Ransel Laptop Waterproof',
            'description' => 'Tas ransel muat laptop 15 inch dengan bahan anti air.',
            'price' => 180000,
            'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500'
        ]);

        Product::create([
            'name' => 'Topi Snapback Streetwear',
            'description' => 'Topi bergaya kasual dengan ukuran strap yang bisa disesuaikan.',
            'price' => 75000,
            'image' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=500'
        ]);

        Product::create([
            'name' => 'Jam Tangan Analog Minimalis',
            'description' => 'Jam tangan dengan strap kulit elegan dan tahan air ringan.',
            'price' => 450000,
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500'
        ]);

        Product::create([
            'name' => 'Kacamata Hitam UV Protection',
            'description' => 'Kacamata hitam anti silau cocok untuk liburan dan outdoor.',
            'price' => 110000,
            'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=500'
        ]);
    }
}
