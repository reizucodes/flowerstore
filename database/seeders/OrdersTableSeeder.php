<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $orders = [
            #for user1 John
            [
                'product_id' => 1,
                'user_id' => 2,
                'price' => 49.99,
                'order_quantity' => 4,
                'total' => 199.96
            ],
            [
                'product_id' => 3,
                'user_id' => 2,
                'price' => 299.99,
                'order_quantity' => 1,
                'total' => 299.99
            ],
            #for user2 Jane
            [
                'product_id' => 8,
                'user_id' => 3,
                'price' => 999.99,
                'order_quantity' => 1,
                'total' => 999.99
            ],
            [
                'product_id' => 14,
                'user_id' => 3,
                'price' => 149.99,
                'order_quantity' => 1,
                'total' => 149.99
            ],
        ];
        DB::table('order')->insert($orders);
    }
}
