<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\client;


class ClientSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        factory(client::class, $count)->create();
    }
    
}
