<?php

namespace Database\Seeders;

use App\Models\CreatorDestination;
use Illuminate\Database\Seeder;

class CreatorDestinationSeeder extends Seeder
{

    //- Yerevan
// - Dilijan
// - Gyumri
// - Jermuk
// - Stepanakert
// - Tbilisi
    
    public function run()
    {
        CreatorDestination::insert([
            ['name' => 'Yerevan'],
            ['name' => 'Dilijan'],
            ['name' => 'Gyumri'],
            ['name' => 'Jermuk'],
            ['name' => 'Stepanakert'],
            ['name' => 'Tbilisi'],
        ]);
    }
}
