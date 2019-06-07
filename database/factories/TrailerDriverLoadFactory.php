<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TrailerDriverLoad;
use Faker\Generator as Faker;
use App\Trailer;
use App\Driver;
use App\CustomerLoad;

$factory->define(TrailerDriverLoad::class, function (Faker $faker) {
    return [
        'trailer_id' => function () {
            return Trailer::first()->id ?? factory(Trailer::class)->create()->id;
        },
        'driver_id' => function () {
            return Driver::first()->id ?? factory(Driver::class)->create()->id;
        },
        'customer_load_id' => function () {
            return CustomerLoad::first()->id ?? factory(CustomerLoad::class)->create()->id;
        },
    ];
});
