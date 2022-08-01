<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TourCategory;
class TourTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TourCategory::insert([
            [
                "name"=> "Classic Tours"
            ],
            [
                "name"=> "Tours With Gurantee Departures"
            ],
            [
                "name"=> "Gastro Tours"
            ],
            [
                "name"=> "Active Tours"
            ],
            [
                "name"=> "One Day"
            ],
            [
                "name"=> "Themed Tours"
            ],
            [
                "name"=> "Best suggestions"
            ]

        ]);
    }
}
