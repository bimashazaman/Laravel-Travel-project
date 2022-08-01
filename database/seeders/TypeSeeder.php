<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            ["type_name"=>"Hiking and trekking tours"],
            ["type_name"=>"Velo and moto tours"],
            ["type_name"=>"Off road tours"],
            ["type_name"=>"Cultural tours"],
            ["type_name"=>"Archaeological tours"],
            ["type_name"=>"Expeditions"],
            ["type_name"=>"Tours for kids"],
            ["type_name"=>"Eco tours"],
            ["type_name"=>"Food and wine tours"],
            ["type_name"=>"Health tours"],
            ["type_name"=>"Regional tours"],
            ["type_name"=>"Winter tours"],
            ["type_name"=>"Air tours"],
            ["type_name"=>"City tours"],

        ]);
    }
}
