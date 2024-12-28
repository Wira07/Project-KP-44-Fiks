<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $staffkeu = User::create([
            'name' => 'Staff Keu',
            'email' => 'staffkeu@example.com',
            'password' => bcrypt('password'),
        ]);

        $staffkeu->assignRole('staffkeu');

        $staffumum = User::create([
            'name' => 'Staff Umum',
            'email' => 'staffumum@example.com',
            'password' => bcrypt('password'),
        ]);

        $staffumum->assignRole('staffumum');

        $user = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('user');
    }
}
