<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Customer::class, function (Faker $faker) use($factory) {
    return [
       'name'=>$faker->name,
        'email'=>$faker->safeEmail,
        'phone'=>$faker->phoneNumber,
        'address_id'=>$factory->create(App\Model\Address::class)->id,
    ];
});
