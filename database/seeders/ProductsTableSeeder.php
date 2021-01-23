<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'MacBook Pro',
            'price' => 2499.99,
            'description' => 'MackBook Pro',
            'image_path' => 'macbook-pro.png'
        ]);
    }
}