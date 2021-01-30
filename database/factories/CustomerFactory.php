<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->isbn10,
        'firstname' =>  $faker->name,
        'lastname' => $faker->lastname,
        'contact_number'=> $faker->e164PhoneNumber,     
        'address' => $faker->address,
    ];
});
