<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Operator;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'operator_id' => $faker->unique()->randomNumber($nbDigits = 8),
        'username' => $faker->userName,
        'password' => $faker->password,
        'firstname' =>  $faker->name,
        'lastname' => $faker->lastname,
        'contact_number'=> $faker->e164PhoneNumber,     
        'address' => $faker->address,
    ];
});
