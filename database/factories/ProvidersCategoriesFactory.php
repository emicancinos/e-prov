<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProvidersCategories;
use Faker\Generator as Faker;
use App\Category;
use App\provider;

$factory->define(ProvidersCategories::class, function (Faker $faker) {
    return [
        'provider_id' => provider::all()->random()->id,
        'category_id' => Category::all()->random()->id,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now()
    ];
});
