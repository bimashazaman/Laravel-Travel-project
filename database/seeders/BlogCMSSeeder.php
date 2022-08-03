<?php

namespace Database\Seeders;

use App\Models\BlogCMS;
use Illuminate\Database\Seeder;

class BlogCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        BlogCMS::insert([
            [
                'title'=>'Blog',
                'subtitle'=>'
                You don’t choose the day you enter the world and you don’t chose the day you leave. It’s what you do in between that makes all the difference.',
                
            ],
        ]);
    }
}
