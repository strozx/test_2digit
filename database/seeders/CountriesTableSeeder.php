<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'United States'],
            ['name' => 'Canada'],
            ['name' => 'Mexico'],
            ['name' => 'United Kingdom'],
            ['name' => 'Germany'],
            ['name' => 'France'],
            ['name' => 'Spain'],
            ['name' => 'Italy'],
            ['name' => 'Poland'],
            ['name' => 'Romania'],
            ['name' => 'Netherlands'],
            ['name' => 'Belgium'],
            ['name' => 'Greece'],
            ['name' => 'Czech Republic'],
            ['name' => 'Portugal'],
            ['name' => 'Sweden'],
            ['name' => 'Hungary'],
            ['name' => 'Austria'],
            ['name' => 'Switzerland'],
            ['name' => 'Bulgaria'],
            ['name' => 'Denmark'],
            ['name' => 'Finland'],
            ['name' => 'Slovakia'],
            ['name' => 'Norway'],
            ['name' => 'Ireland'],
            ['name' => 'Croatia'],
            ['name' => 'Moldova'],
            ['name' => 'Bosnia and Herzegovina'],
            ['name' => 'Albania'],
            ['name' => 'Lithuania'],
            ['name' => 'North Macedonia'],
            ['name' => 'Slovenia'],
            ['name' => 'Latvia'],
            ['name' => 'Estonia'],
            ['name' => 'Montenegro'],
            ['name' => 'Luxembourg'],
            ['name' => 'Malta'],
            ['name' => 'Iceland'],
            ['name' => 'Andorra'],
            ['name' => 'Monaco'],
            ['name' => 'Liechtenstein'],
            ['name' => 'San Marino'],
        ]);
    }
}
