<?php

namespace Database\Seeders;

use App\Models\HotelType as ModelsHotelType;
use Illuminate\Database\Seeder;


class HotelType extends Seeder
{
    
    public function run()
    {
        ModelsHotelType::insert([
            [
                "name"=> "Hotel",
            ],
            [
                "name"=> "Resort",
            ],
            [
                "name"=> "Guest House",
            ],
            [
                "name"=> "Hostel",
            ],
            [
                "name"=> "Motel",
            ],
            [
                "name"=> "B&B",
            ],
            [
                "name"=> "Bed and Breakfast",
            ],
            [
                "name"=> "Inn",
            ],
            [
                "name"=> "Lodge",
            ],
            [
                "name"=> "Cottage",
            ],
            [
                "name"=> "Cabin",
            ],
            [
                "name"=> "Bungalow",
            ],
            [
                "name"=> "Cottage",
            ],
            [
                "name"=> "camp",
            ],
           
          
           
           
        ]);
    }
}
