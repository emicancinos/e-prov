<?php

use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SpecialitySeeder;
use App\provider;
use App\User;
use App\client;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitySeeder::class,
            CategorySeeder::class,
            SpecialitySeeder::class,
            ]);
            factory(User::class, 50)->create();
            factory(client::class, 50)->create();
            factory(provider::class, 100)->create();
            

        
    }
}
