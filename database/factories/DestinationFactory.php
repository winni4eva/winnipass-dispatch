<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Destination;
use Faker\Generator as Faker;
use App\Dispatcher;

$factory->define(Destination::class, function (Faker $faker) {
    return [
        'dispatcher_id' => function () {
            return Dispatcher::first()->id ?? factory(Dispatcher::class)->create()->id;
        },
        'destination' => $faker->unique()->state,
    ];
});
