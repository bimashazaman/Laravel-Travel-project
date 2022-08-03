<?php

namespace Database\Seeders;

use App\Models\HotelCMS;
use Illuminate\Database\Seeder;

class HotelCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelCMS::insert([
            [
                'title'=>'Hotel',
                'description'=>'It’s never too late to have a life you love. Don’t ever feel like you’ve missed the boat, don’t have what it takes or can’t achieve your dreams. Instead of removing your dreams, remove the doubts and fears keeping you from them. It’s never, ever too late.',
                
            ],
        ]);
    }
}
