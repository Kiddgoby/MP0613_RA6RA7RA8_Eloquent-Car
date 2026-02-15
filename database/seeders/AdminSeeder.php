<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username' => 'admin1',
            'fullname' => 'Admin One',
            'email' => 'admin1@example.com',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'username' => 'admin2',
            'fullname' => 'Admin Two',
            'email' => 'admin2@example.com',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'username' => 'admin3',
            'fullname' => 'Admin Three',
            'email' => 'admin3@example.com',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'username' => 'manager1',
            'fullname' => 'Manager One',
            'email' => 'manager1@example.com',
            'password' => Hash::make('admin123'),
        ]);

        Admin::create([
            'username' => 'manager2',
            'fullname' => 'Manager Two',
            'email' => 'manager2@example.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
