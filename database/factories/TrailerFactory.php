<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Trailer;
use Faker\Generator as Faker;
use App\Dispatcher;

$factory->define(Trailer::class, function (Faker $faker) {
    return [
        'dispatcher_id' => function () {
            return Dispatcher::first()->id ?? factory(Dispatcher::class)->create()->id;
        },
        'trailer' => $faker->word,
        'capacity' => $faker->numberBetween(1000, $max = 10000),
    ];
});
