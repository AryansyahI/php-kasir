<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Tambahkan baris ini

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            ['name' => 'Laptop', 'description' => 'Laptop.', 'price' => 10000000, 'stock' => 10],
            ['name' => 'Keyboard', 'description' => 'Keyboard.', 'price' => 500000, 'stock' => 20],
            ['name' => 'Mouse Wireless', 'description' => 'Mouse tanpa kabel.', 'price' => 300000, 'stock' => 15],
        ]);
    }
}

