<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'won' => $faker->numberBetween(1,10),
        'loss' => $faker->numberBetween(1,5),
        'draw' => $faker->numberBetween(5,10),
        'point' => $faker->numberBetween(20,40),
        'coach' => $faker->name('male')
    ];
});
