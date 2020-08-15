<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Login;
use Faker\Generator as Faker;

$factory->define(Login::class, function (Faker $faker) {
    $randomDateTime = $faker->dateTimeBetween('-6 hours', 'now');
    return [
        'user_id' => factory(App\User::class),
        'tenant_id' => factory(App\Tenant::class),
        'created_at' => $randomDateTime,
        'updated_at' => $randomDateTime,
    ];
});
