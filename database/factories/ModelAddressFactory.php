<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Address::class, function (Faker $faker) {
    return [
        'house'=>$faker->buildingNumber,
        'road'=>$faker->streetName,
        'community'=>$faker->city,
        'zipcode'=>$faker->postcode,
        'state'=>$faker->state,
        'country'=>$faker->country,
    ];
});
