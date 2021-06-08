<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\provider;
use Faker\Generator as Faker;
use App\User;
use App\city;

$factory->define(provider::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'cuit_number' => $faker->numerify('###########'),
        'enrollment_number' => $faker->numerify('#######'),
        'business_name' => $faker->streetName,
        'city_id' => city::all()->random()->id,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ];
});
