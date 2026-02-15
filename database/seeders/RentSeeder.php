<?php

namespace Database\Seeders;

use App\Models\Rent;
use Illuminate\Database\Seeder;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rent::create([
            'start_date' => '2024-01-10 08:00:00',
            'end_date' => '2024-01-13 18:00:00',
            'total_cost' => 450.00,
            'payement_status' => 'paid',
            'payement_method' => 'visa',
            'car_id' => 1,
            'user_id' => 1,
        ]);

        Rent::create([
            'start_date' => '2024-01-15 10:00:00',
            'end_date' => '2024-01-18 17:00:00',
            'total_cost' => 220.00,
            'payement_status' => 'paid',
            'payement_method' => 'mastercard',
            'car_id' => 2,
            'user_id' => 2,
        ]);

        Rent::create([
            'start_date' => '2024-02-01 09:00:00',
            'end_date' => '2024-02-05 16:00:00',
            'total_cost' => 240.00,
            'payement_status' => 'paid',
            'payement_method' => 'paypal',
            'car_id' => 3,
            'user_id' => 3,
        ]);

        Rent::create([
            'start_date' => '2024-02-10 11:00:00',
            'end_date' => '2024-02-12 15:00:00',
            'total_cost' => 130.00,
            'payement_status' => 'pending',
            'payement_method' => 'visa',
            'car_id' => 5,
            'user_id' => 4,
        ]);

        Rent::create([
            'start_date' => '2024-02-14 08:30:00',
            'end_date' => '2024-02-17 18:30:00',
            'total_cost' => 240.00,
            'payement_status' => 'paid',
            'payement_method' => 'mastercard',
            'car_id' => 6,
            'user_id' => 5,
        ]);       
    }
}
