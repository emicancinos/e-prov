<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\client;
use Faker\Generator as Faker;
use App\User;

$factory->define(client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->e164PhoneNumber,
        'user_id' => User::all()->random()->id
    ];
});
