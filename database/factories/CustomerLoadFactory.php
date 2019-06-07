<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CustomerLoad;
use Faker\Generator as Faker;
use App\Customer;

$factory->define(CustomerLoad::class, function (Faker $faker) {
    return [
        'customer_id' => function () {
            return Customer::first()->id ?? factory(Customer::class)->create()->id;
        },
        'load' => $faker->word,
        'weight' => $faker->numberBetween(1000, $max = 10000),
    ];
});
