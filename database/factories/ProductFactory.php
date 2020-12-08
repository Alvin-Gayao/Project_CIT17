<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'description' => $faker->word,
        'price' => $faker->numerify(100, 1000)
    ];
});
