<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destination;
class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Destination::insert([
            [
                "name"=> "Armenia"
            ],
            [
                "name"=> "Georgia"
            ],
            [
                "name"=> "Iran"
            ]
        ]);
    }
}
