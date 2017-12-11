<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) use($factory) {
    return [
        'product_id'=>$factory->create(App\Model\Product::class)->id,
        'customer_id'=>$factory->create(App\Model\Customer::class)->id,
        'review'=>$faker->paragraph(1),
        'star'=>$faker->numberBetween(0,5)
    ];
});
