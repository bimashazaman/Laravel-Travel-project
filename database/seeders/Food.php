<?php

namespace Database\Seeders;

use App\Models\FoodArmeniaCategory;
use Illuminate\Database\Seeder;

class Food extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodArmeniaCategory::insert([
            [
                "name"=> "Restaurants",
            ],
            [
                "name"=> "Wineries",
            ],
            [
                "name"=> "Village Yards",
            ],
            [
                "name"=> "Cafes and Club",
            ],

        ]);
    }
}
