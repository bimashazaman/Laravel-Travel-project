<?php

namespace Database\Seeders;

use App\Models\TourCMS as ModelsTourCMS;
use Illuminate\Database\Seeder;

class TourCMS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsTourCMS::insert(
            [
                [
                    'title'=>'Tours To Armenia',
                    'subtitle'=>'Take the first step, the rest will follow. Book the ticket, apply for the job, send the email, jump into the water. The rest gets easier from there. Certainly, travel is more than the seeing of sights; it is a change that goes on, deep and permanent, in the ideas of living.',
                    
                ],
            ]
        );
        
    }
}
