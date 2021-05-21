<?php

use Illuminate\Database\Seeder;
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
        factory(city::class, 7)->create();

    }
}
