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
                "name"=> "ClassicTours"
            ],
            [
                "name"=> "ToursWithGuranteeDepartures"
            ],
            [
                "name"=> "GastroTours"
            ],
            [
                "name"=> "ActiveTours"
            ],
            [
                "name"=> "OneDay"
            ],
            [
                "name"=> "ThemedTours"
            ],

        ]);
    }
}
