<?php

namespace Database\Seeders;

use App\Models\TourAccessoriesCMS;
use Illuminate\Database\Seeder;

class TourAccessoriesCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourAccessoriesCMS::insert([
            [
                'title'=>'Rent Tour Accessories',
                'subtitle'=>'
                What do you adore about your local culture? The people, places, and things that make up your destination? Put together a series of posts where you pour your heart out. Share about what makes you smile, make note of the nuances of the local region that most people overlook. And of course, be sure to talk about how your tour and experience are an integral part of the local culture. Focus on using sensory language to transport people there through story. ',
                
            ],
        ]);
    }
}
