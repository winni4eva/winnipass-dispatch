<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TrailerDestination;
use Faker\Generator as Faker;
use App\TrailerDriverLoad;
use App\Destination;

$factory->define(TrailerDestination::class, function (Faker $faker) {
    return [
        'trailer_driver_load_id' => function () {
            return TrailerDriverLoad::first()->id ?? factory(TrailerDriverLoad::class)->create()->id;
        },
        'destination_id' => function () {
            return Destination::first()->id ?? factory(Destination::class)->create()->id;
        },
    ];
});
