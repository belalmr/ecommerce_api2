<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail'=> $faker->paragraph,
        'price'=> $faker->numberBetween(100.00, 19999.999),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2, 300.00)
    ];
});
