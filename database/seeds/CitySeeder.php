<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['id' => 1,'location' => 'GBA ZONA NORTE'],
            ['id' => 2,'location' => 'GBA ZONA ESTE'],
            ['id' => 3,'location' => 'GBA ZONA OESTE'],
            ['id' => 4,'location' => 'GBA ZONA SUR'],
            ['id' => 5,'location' => 'CABA'],
            ['id' => 6,'location' => 'LA PLATA'],
            ['id' => 7,'location' => 'ZARATE-CAMPANA']
        ]);
    }
}
