<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});
