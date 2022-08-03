<?php

namespace Database\Seeders;

use App\Models\MiceCMS;
use Illuminate\Database\Seeder;

class MiceCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MiceCMS::insert([
            [
                'title'=>'Mice',
                'description'=>'
                You don’t choose the day you enter the world and you don’t chose the day you leave. It’s what you do in between that makes all the difference.',
                
            ],
        ]);
    }
}
