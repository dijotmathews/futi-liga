<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'surname' => $faker->lastName,
        'jersey' => $faker->numberBetween(1, 100),
        'position' => $faker->randomElement(array('lb', 'rb', 'cmf', 'cf', 'gk', 'rf', 'lf')),
        'role' => '',
        'team_id' => $faker->numberBetween(1,10)
    ];
});
