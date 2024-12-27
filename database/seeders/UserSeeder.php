<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Pastikan mengganti password sesuai kebutuhan
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staff Keuangan',
                'email' => 'staffkeu@example.com',
                'password' => Hash::make('password'),
                'role' => 'staffkeu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staff Umum',
                'email' => 'staffumum@example.com',
                'password' => Hash::make('password'),
                'role' => 'staffumum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
