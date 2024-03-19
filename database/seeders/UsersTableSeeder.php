<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data admin
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        // Buat data user
        for ($i = 1; $i <= 10; $i++) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
                'phone' => '081234567' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => $i % 2 == 0 ? 'active' : 'inactive',
            ]);
        }
    }
}