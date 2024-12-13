<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::insert([
            ['name' => 'Adidas', 'price' => 1000, 'category' => 'sepatu'],
            ['name' => 'Nike', 'price' => 999, 'category' => 'sepatu'],
            ['name' => 'Levis', 'price' => 500, 'category' => 'celana'],
            ['name' => 'Uniqlo', 'price' => 100, 'category' => 'baju'],
        ]);
    }
}
