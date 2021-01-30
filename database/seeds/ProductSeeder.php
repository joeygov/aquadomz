<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        $product = ['Sabon','Toothpaste'];
    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
                'product_code' => $faker->unique()->randomNumber($nbDigits = 8),
                'product_name' => $faker->randomElement($product),
                'supplier' => $faker->company,
                'quantity' =>  $faker->numberBetween(1,10000),
                'quantity_sold' => $faker->numberBetween(1,10000),
                'quantity_remaining' => $faker->numberBetween(1,10000),
                'date_purchased' => $faker->date,
	        ]);
	}
    }
}
