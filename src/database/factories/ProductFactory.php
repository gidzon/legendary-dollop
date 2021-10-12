<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'desc' => $faker->realText(500),
        'price' => $faker->numberBetween(5000, 20000),
        'category_id' => $faker->numberBetween(12, 14),
        'img_path' => $faker->imageUrl(800, 500)
    ];
});
