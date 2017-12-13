<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) use($factory) {
    return [
        'name'=>$faker->word,
        'detail'=>$faker->paragraph(1),
        'price'=>$faker->numberBetween(100,1000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2,30),
        'user_id'=>$factory->create(App\User::class)->id,
    ];
});
