<?php

namespace Database\Seeders;

use App\Models\ThingsToDoCategory;
use Illuminate\Database\Seeder;

class ThingsToDo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThingsToDoCategory::insert([
            [
                "name"=> "Tourist Experiences",
            ],
            [
                "name"=> "Festivals",
            ],
            [
                "name"=> "Entertainment",
            ],
            [
                "name"=> "Shopping",
            ],
          

        ]);
    }
}
