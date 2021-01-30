<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Products;


$factory->define(Products::class, function (Faker $faker) {
    return [
        
        "product_code"=> $this->faker->unique()->randomNumber($nbDigits = 8),
        "product_name"=> Str::random(10),
        "supplier" => $this->faker->name,
        "quantity" =>  $this->faker->randomElement([100,200,300,400]),
        "quantity_sold" => $this->faker->randomElement([100,200]),
        "quantity_remaining" => $this->faker->randomElement([100,200,300,400]),
        "date_purchased" => $this->faker->date,


    ];
});

