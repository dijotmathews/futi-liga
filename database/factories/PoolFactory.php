<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pool;
use Faker\Generator as Faker;

$factory->define(Pool::class, function (Faker $faker) {
    return [
        //
        'name'=>'pool1'
    ];
});
