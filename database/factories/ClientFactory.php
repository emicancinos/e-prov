<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\client;
use Faker\Generator as Faker;
use App\User;

$factory->define(client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'phone_number' => $faker->numerify('########'),
        'email' => $faker->email,
        'user_id' => User::all()->random()->id
    ];
});
