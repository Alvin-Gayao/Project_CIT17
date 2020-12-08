<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'product_id' => $faker->productNumber,
        'quantity' => $faker->amount,
        'buyer_name' => $faker->clientName,
        'sold_at' => $faker->dateTime,
		'end' => $faker->dateTime
    ];
});
