<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Argentina'],
            ['name' => 'Brazil'],
            ['name' => 'Canada'],
            ['name' => 'Denmark'],
            ['name' => 'England'],
            ['name' => 'France'],
            ['name' => 'Germany'],
            ['name' => 'Hungary'],
            ['name' => 'Italy'],
            ['name' => 'Japan'],
            ['name' => 'Lithuania'],
            ['name' => 'Mexico'],
            ['name' => 'Netherlands'],
            ['name' => 'Oman'],
            ['name' => 'Portugal'],
            ['name' => 'Qatar'],
            ['name' => 'Russia'],
            ['name' => 'Sweden'],
            ['name' => 'Turkey'],
            ['name' => 'United States'],
            ['name' => 'Venezuela'],
            ['name' => 'Zimbabwe'],
        ]);
    }
}
