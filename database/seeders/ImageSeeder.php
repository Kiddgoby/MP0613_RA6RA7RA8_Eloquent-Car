<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Images for Car 1 
        Image::create([
            'url' => '/img/cars/1-1.jpg',
            'car_id' => 1,
        ]);

        Image::create([
            'url' => '/img/cars/1-2.jpg',
            'car_id' => 1,
        ]);

        Image::create([
            'url' => '/img/cars/1-3.jpg',
            'car_id' => 1,
        ]);

        Image::create([
            'url' => '/img/cars/1-4.jpg',
            'car_id' => 1,
        ]);

        // Images for Car 2 
        Image::create([
            'url' => '/img/cars/2-1.jpg',
            'car_id' => 2,
        ]);

        Image::create([
            'url' => '/img/cars/2-2.jpg',
            'car_id' => 2,
        ]);

        Image::create([
            'url' => '/img/cars/2-3.jpg',
            'car_id' => 2,
        ]);

        // Images for Car 3 
        Image::create([
            'url' => '/img/cars/3-1.jpg',
            'car_id' => 3,
        ]);

        Image::create([
            'url' => '/img/cars/3-2.jpg',
            'car_id' => 3,
        ]);

        Image::create([
            'url' => '/img/cars/3-3.jpg',
            'car_id' => 3,
        ]);

        // Images for Car 4 
        Image::create([
            'url' => '/img/cars/4-1.jpg',
            'car_id' => 4,
        ]);

        Image::create([
            'url' => '/img/cars/4-2.jpg',
            'car_id' => 4,
        ]);

        Image::create([
            'url' => '/img/cars/4-3.jpg',
            'car_id' => 4,
        ]);

        // Images for Car 5 
        Image::create([
            'url' => '/img/cars/5-1.jpg',
            'car_id' => 5,
        ]);

        Image::create([
            'url' => '/img/cars/5-2.jpg',
            'car_id' => 5,
        ]);

        Image::create([
            'url' => '/img/cars/5-3.jpg',
            'car_id' => 5,
        ]);

        // Images for Car 6 
        Image::create([
            'url' => '/img/cars/6-1.jpg',
            'car_id' => 6,
        ]);

        Image::create([
            'url' => '/img/cars/6-2.jpg',
            'car_id' => 6,
        ]);        

        Image::create([
            'url' => '/img/cars/6-3.jpg',
            'car_id' => 6,
        ]);        
    }
}
