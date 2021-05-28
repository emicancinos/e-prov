<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Database\Seeders\CitySeeder;
use App\User;
use App\city;
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
        factory(User::class, 10)->create();
        factory(client::class, 10)->create();
        $this->call([
            CitySeeder::class,
        ]);

    }
}
