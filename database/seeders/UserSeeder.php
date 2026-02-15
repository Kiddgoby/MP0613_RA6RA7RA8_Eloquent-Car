<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone' => '+1234567890',
            'date_of_birth' => '1990-01-15',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'phone' => '+1234567891',
            'date_of_birth' => '1995-03-22',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Michael',
            'last_name' => 'Johnson',
            'phone' => '+1234567892',
            'date_of_birth' => '1988-05-10',
            'email' => 'michael.johnson@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Sarah',
            'last_name' => 'Williams',
            'phone' => '+1234567893',
            'date_of_birth' => '1992-07-18',
            'email' => 'sarah.williams@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'David',
            'last_name' => 'Brown',
            'phone' => '+1234567894',
            'date_of_birth' => '1985-09-25',
            'email' => 'david.brown@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Emma',
            'last_name' => 'Davis',
            'phone' => '+1234567895',
            'date_of_birth' => '1998-11-30',
            'email' => 'emma.davis@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Robert',
            'last_name' => 'Miller',
            'phone' => '+1234567896',
            'date_of_birth' => '1987-02-14',
            'email' => 'robert.miller@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Lisa',
            'last_name' => 'Wilson',
            'phone' => '+1234567897',
            'date_of_birth' => '1993-04-20',
            'email' => 'lisa.wilson@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'James',
            'last_name' => 'Moore',
            'phone' => '+1234567898',
            'date_of_birth' => '1989-06-08',
            'email' => 'james.moore@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'first_name' => 'Mary',
            'last_name' => 'Taylor',
            'phone' => '+1234567899',
            'date_of_birth' => '1996-08-12',
            'email' => 'mary.taylor@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
