<?php

namespace Database\Seeders;

use App\Models\ThingsToSeeCategory;
use Illuminate\Database\Seeder;

class ThingsToSee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThingsToSeeCategory::insert([
            [
                "name"=> "Churches and Monastries",
            ],
            [
                "name"=> "Old Roads",
            ],
            [
                "name"=> "Archiological Sites and Foundings",
            ],
            [
                "name"=> "Museums",
            ],
            [
                "name"=> "Natural Sites",
            ],
            [
                "name"=> "Abandoned places",
            ],
            [
                "name"=> "Soviet and Modern Monuments",
            ],
            [
                "name"=> "Statues",
            ],

        ]);
    }
}
