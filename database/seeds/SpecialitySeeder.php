<?php
namespace Database\Seeders;

use App\speciality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('specialities')->insert([

         ['id' => 1,'category_id' => 1,'description' => 'Instalación'],
         ['id' => 2,'category_id' => 1,'description' => 'Diagnóstico y reparación'],
         ['id' => 3,'category_id' => 1,'description' => 'Trámites y documentación'],
         ['id' => 4,'category_id' => 1,'description' => 'Reparación de pérdidas'],
         
         ['id' => 5,'category_id' => 2,'description' => 'Instalación completa'],
         ['id' => 6,'category_id' => 2,'description' => 'Cambios o reparación'],
         ['id' => 7,'category_id' => 2,'description' => 'Destapaciones'],
         ['id' => 8,'category_id' => 2,'description' => 'Detección y reparacion de perdidas de agua'],

         ['id' => 9,'category_id' => 3,'description' => 'Instalación completa'],
         ['id' => 10,'category_id' => 3,'description' => 'Diagnóstico y reparación'],
         ['id' => 11,'category_id' => 3,'description' => 'Cableados'],
         ['id' => 12,'category_id' => 3,'description' => 'Instalación de artefactos'],

         ['id' => 13,'category_id' => 4,'description' => 'Pintura completa'],
         ['id' => 14,'category_id' => 4,'description' => 'Pintra de interiores'],
         ['id' => 15,'category_id' => 4,'description' => 'Revestimientos'],
         ['id' => 16,'category_id' => 4,'description' => 'Impermeabilizaciones'],
        
         ['id' => 17,'category_id' => 5,'description' => 'Instalaciíon de Aire Acondicionado'],
         ['id' => 18,'category_id' => 5,'description' => 'Mantenieminto'],
         ['id' => 19,'category_id' => 5,'description' => 'Service y reparación'],
         ['id' => 20,'category_id' => 5,'description' => 'Recarga de gas'],

        ]);
    }
}
