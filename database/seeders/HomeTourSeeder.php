<?php

namespace Database\Seeders;

use App\Models\HomeTour;
use Illuminate\Database\Seeder;

class HomeTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeTour::insert([
            [
                'name'=>'Home',
            ],
            [
                'name'=>'other',
            ]
        ]);
    }
}
