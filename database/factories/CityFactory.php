<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\city;
use Faker\Generator as Faker;

$factory->define(city::class, function (Faker $faker) {
    return [
        'location' => $faker->randomElement([
            'CABA',
            'GBA ZONA NORTE',
            'GBA ZONA SUR',
            'GBA ZONA ESTE',
            'GBA ZONA OESTE',
            'LA PLATA',
            'ZARATE-CAMPANA'])
    ];
});
