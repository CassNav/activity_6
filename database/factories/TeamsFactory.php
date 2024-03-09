<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Team;
$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'city' => $faker->city,
        'titles' => $faker->numberBetween(0, 10),
        'logo' => $faker->imageUrl(100, 100), // Assuming logo is a URL; adjust as needed
    ];
});