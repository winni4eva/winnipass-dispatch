<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customer;
use Faker\Generator as Faker;
use App\Dispatcher;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'dispatcher_id' => function () {
            return Dispatcher::first()->id ?? factory(Dispatcher::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
    ];
});
