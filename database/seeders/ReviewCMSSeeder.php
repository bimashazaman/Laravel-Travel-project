<?php

namespace Database\Seeders;

use App\Models\ReviewCMS;
use Illuminate\Database\Seeder;

class ReviewCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReviewCMS::insert([
            [
                'title'=>'Review',
                'subtitle'=>'
                You don’t choose the day you enter the world and you don’t chose the day you leave. It’s what you do in between that makes all the difference.',
                
            ],
        ]);
    }
}
