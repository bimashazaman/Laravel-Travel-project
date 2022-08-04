<?php

namespace Database\Seeders;

use App\Models\MiceCMS;
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
            HomeCMSSeeder::class,
            TourCMS::class,
            HotelCMSSeeder::class,
            TourAccessoriesCMSSeeder::class,
            MiceCMSSeeder::class,
            BlogCMSSeeder::class,
            VacancyCMSSeeder::class,
            ReviewCMSSeeder::class,
            CarCmsSeeder::class,
            HomeTourSeeder::class,


        ]);
    }
}
