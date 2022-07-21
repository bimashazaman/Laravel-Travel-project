<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NearbyArmeniaCategory;

class NearbyArmenia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NearbyArmeniaCategory::insert([
            [
                "name"=> "Georgia",
            ],
            [
                "name"=> "Iran",
            ],
    
        ]);
    }
}
