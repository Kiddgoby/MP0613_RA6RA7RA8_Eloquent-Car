<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'model' => 'RAV4',
            'brand' => 'Toyota',
            'make_year' => 2023,
            'passenger_capacity' => 5,
            'kilometers_per_liter' => 14.5,
            'fuel_type' => 'hybrid',
            'transmission_type' => 'Automatic',
            'daily_rate' => 65.00,
            'available' => true,
            'image_url' => '/img/cars/1-1.jpg',
        ]);

        Car::create([
            'model' => '640d',
            'brand' => 'BMW',
            'make_year' => 2023,
            'passenger_capacity' => 5,
            'kilometers_per_liter' => 9.8,
            'fuel_type' => 'diesel',
            'transmission_type' => 'Automatic',
            'daily_rate' => 150.00,
            'available' => true,
            'image_url' => '/img/cars/2-1.jpg',
        ]);

        Car::create([
            'model' => 'Polo GTI',
            'brand' => 'Volkswagen',
            'make_year' => 2022,
            'passenger_capacity' => 5,
            'kilometers_per_liter' => 11.2,
            'fuel_type' => 'gasoline',
            'transmission_type' => 'Manual',
            'daily_rate' => 55.00,
            'available' => true,
            'image_url' => '/img/cars/3-1.jpg',
        ]);

        Car::create([
            'model' => 'Escalade',
            'brand' => 'Cadillac',
            'make_year' => 2023,
            'passenger_capacity' => 7,
            'kilometers_per_liter' => 8.5,
            'fuel_type' => 'gasoline',
            'transmission_type' => 'Automatic',
            'daily_rate' => 180.00,
            'available' => false,
            'image_url' => '/img/cars/4-1.jpg',
        ]);

        Car::create([
            'model' => 'M4',
            'brand' => 'BMW',
            'make_year' => 2023,
            'passenger_capacity' => 4,
            'kilometers_per_liter' => 7.5,
            'fuel_type' => 'gasoline',
            'transmission_type' => 'Automatic',
            'daily_rate' => 200.00,
            'available' => true,
            'image_url' => '/img/cars/5-1.jpg',
        ]);

        Car::create([
            'model' => '530e',
            'brand' => 'BMW',
            'make_year' => 2023,
            'passenger_capacity' => 5,
            'kilometers_per_liter' => 12.8,
            'fuel_type' => 'hybrid',
            'transmission_type' => 'Automatic',
            'daily_rate' => 140.00,
            'available' => true,
            'image_url' => '/img/cars/6-1.jpg',
        ]);
    }
}
