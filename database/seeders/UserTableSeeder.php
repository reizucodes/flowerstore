<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'status' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'address' => 'Manila, Philippines',
            'mobile_number' => '09425366718',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'status' => 'user',
            'first_name' => 'John',
            'last_name' => 'Smith',
            'address' => 'Albay, Philippines',
            'mobile_number' => '09655388729',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'created_at'  => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
