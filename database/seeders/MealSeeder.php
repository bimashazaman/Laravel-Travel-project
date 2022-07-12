<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Meal::insert([
            [
                "name"=>"meal 1"
            ],
            [
                "name"=>"meal 2"
            ],
            [
                "name"=>"meal 3"
            ],
            [
                "name"=>"meal 4"
            ]
        ]);
    }
}
