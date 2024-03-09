<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\City;

$factory->define(cities::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'state' => $faker->state,
    ];
});