<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'description' => $faker->text(80),
        'price' => $faker->randomDigit,
    ];
});
