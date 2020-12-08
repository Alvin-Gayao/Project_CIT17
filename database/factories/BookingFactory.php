<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->clientName,
        'evet_id' => $faker->event,
        'location' => $faker->place,
        'start' => $faker->dateTime,
		'end' => $faker->dtaeTime
    ];
});
