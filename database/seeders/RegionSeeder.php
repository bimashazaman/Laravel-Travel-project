<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Region::insert([
            [
                'name' => 'Yerevan',
            ],
            [
                'name' => 'Gyumri',
            ],
            [
                'name' => 'Diijan',
            ],
            [
                'name' => 'Tsakhkadzor',
            ],
            [
                'name' => 'Jermuk',
            ],
            [
                'name' => 'Lori',
            ],
            [
                'name' => 'Sevan',
            ],
            [
                'name' => 'Goris',
            ],
            [
                'name' => 'Sisian',
            ],
            [
                'name' => 'Areni',
            ],
            [
                'name' => 'Kapan',
            ],
            [
                'name' => 'Ashtarak',
            ],
            [
                'name' => 'Garni',
            ],
            [
                'name' => 'Aghveran',
            ],
            [
                'name' => 'Arzni',
            ],
            [
                'name' => 'Ijevan',
            ],
            [
                'name' => 'Meghri',
            ],
            [
                'name' => 'Stepanakert',
            ],
            [
                'name' => 'Tbilisi',
            ],

            [
                'name' => 'Batumi',
            ],
            [
                'name' => 'Kutaisi',
            ],
            [
                'name' => 'Signaghi',
            ],
            [
                'name' => 'Akhaltsikhe',
            ],
            [
                'name' => 'Mestia',
            ],
            [
                'name' => 'Bakuriani',
            ],
            [
                'name' => 'Kazbegi',
            ],








        ]);
    }
}
