<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'product_name' => 'iPhone 12',
                'product_description' => 'The latest iPhone model with advanced features.',
                'quantity' => 10,
                'price' => 999.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Samsung Galaxy S21',
                'product_description' => 'A powerful Android smartphone with a stunning display.',
                'quantity' => 5,
                'price' => 899.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Sony PlayStation 5',
                'product_description' => 'Next-gen gaming console with immersive gameplay.',
                'quantity' => 3,
                'price' => 499.99,
                'status' => 0,
            ],
            [
                'product_name' => 'Apple MacBook Pro',
                'product_description' => 'High-performance laptop for professionals.',
                'quantity' => 8,
                'price' => 1799.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Smart Watch',
                'product_description' => 'Fitness tracker with smart features.',
                'quantity' => 15,
                'price' => 149.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Dell XPS 15',
                'product_description' => 'Sleek and powerful laptop for productivity and entertainment.',
                'quantity' => 7,
                'price' => 1699.99,
                'status' => 0,
            ],
            [
                'product_name' => 'Amazon Echo Dot',
                'product_description' => 'Smart speaker with voice control for your home.',
                'quantity' => 12,
                'price' => 49.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Nikon D850',
                'product_description' => 'Professional DSLR camera for high-resolution photography.',
                'quantity' => 2,
                'price' => 2999.99,
                'status' => 0,
            ],
            [
                'product_name' => 'Fitbit Charge 4',
                'product_description' => 'Advanced fitness tracker with heart rate monitoring.',
                'quantity' => 9,
                'price' => 129.99,
                'status' => 1,
            ],
            [
                'product_name' => 'LG OLED TV',
                'product_description' => 'Ultra-thin 4K OLED TV with stunning picture quality.',
                'quantity' => 4,
                'price' => 1999.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Bose QuietComfort 35 II',
                'product_description' => 'Wireless noise-canceling headphones for immersive audio.',
                'quantity' => 6,
                'price' => 299.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Canon EOS R5',
                'product_description' => 'Mirrorless camera with advanced video and photography capabilities.',
                'quantity' => 3,
                'price' => 3799.99,
                'status' => 0,
            ],
            [
                'product_name' => 'Samsung QLED TV',
                'product_description' => 'High-end QLED TV with vibrant colors and stunning visuals.',
                'quantity' => 5,
                'price' => 2499.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Microsoft Surface Pro 7',
                'product_description' => 'Versatile 2-in-1 laptop for work and play.',
                'quantity' => 7,
                'price' => 1199.99,
                'status' => 1,
            ],
            [
                'product_name' => 'GoPro HERO9 Black',
                'product_description' => 'Action camera with 5K video and advanced stabilization.',
                'quantity' => 10,
                'price' => 449.99,
                'status' => 1,
            ],
            [
                'product_name' => 'Sony WH-1000XM4',
                'product_description' => 'Premium noise-canceling headphones for an immersive audio experience.',
                'quantity' => 4,
                'price' => 349.99,
                'status' => 1,
            ],
        ];

        // Insert the products into the database
        DB::table('product')->insert($products);
    }
}
