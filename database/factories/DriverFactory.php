<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Driver;
use Faker\Generator as Faker;
use App\Dispatcher;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'dispatcher_id' => function () {
            return Dispatcher::first()->id ?? factory(Dispatcher::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
