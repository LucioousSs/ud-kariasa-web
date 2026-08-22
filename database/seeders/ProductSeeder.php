<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Isi data dummy produk sembako untuk uji coba.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Beras Ramos 5kg', 'category' => 'Sembako Pokok', 'price' => 68000, 'stock' => 40, 'image' => null],
            ['name' => 'Minyak Goreng Filma 1L', 'category' => 'Sembako Pokok', 'price' => 17000, 'stock' => 60, 'image' => null],
            ['name' => 'Gula Pasir Gulaku 1kg', 'category' => 'Sembako Pokok', 'price' => 17500, 'stock' => 50, 'image' => null],
            ['name' => 'Tepung Terigu Segitiga Biru 1kg', 'category' => 'Bumbu Dapur', 'price' => 11000, 'stock' => 35, 'image' => null],
            ['name' => 'Telur Ayam 1kg', 'category' => 'Sembako Pokok', 'price' => 28000, 'stock' => 25, 'image' => null],
            ['name' => 'Mie Instan Indomie Goreng', 'category' => 'Makanan Instan', 'price' => 3500, 'stock' => 100, 'image' => null],
            ['name' => 'Kecap Manis Bango 275ml', 'category' => 'Bumbu Dapur', 'price' => 15000, 'stock' => 30, 'image' => null],
            ['name' => 'Kopi Sachet Kapal Api', 'category' => 'Minuman', 'price' => 1000, 'stock' => 80, 'image' => null],
            ['name' => 'Teh Celup Sariwangi', 'category' => 'Minuman', 'price' => 12000, 'stock' => 45, 'image' => null],
            ['name' => 'Garam Dapur Refina 500g', 'category' => 'Bumbu Dapur', 'price' => 5000, 'stock' => 55, 'image' => null],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}