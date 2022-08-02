<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Food;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DestinationSeeder::class,
            TourTypeSeeder::class,
            Food::class,
            NearbyArmenia::class,
            ThingsToDo::class,
            ThingsToSee::class,
            HotelType::class,
            RegionSeeder::class,
            TypeSeeder::class,
            CreateUsersSeeder::class,

        ]);
    }
}
