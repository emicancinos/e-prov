<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1,'name' => 'GASISTA'],
            ['id' => 2,'name' => 'PLOMERO'],
            ['id' => 3,'name' => 'ELECTRICISTA'],
            ['id' => 4,'name' => 'PINTOR'],
            ['id' => 5,'name' => 'TECNICO DE AIRE ACONDICIONADO'],
        ]);
    }
}
