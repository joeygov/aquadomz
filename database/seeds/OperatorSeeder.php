<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            foreach (range(1,10) as $index) {
                DB::table('operators')->insert([
                    'operator_id' => $faker->unique()->randomNumber($nbDigits = 8),
                    'username' => $faker->userName,
                    'password' => $faker->password,
                    'firstname' =>  $faker->name,
                    'lastname' => $faker->lastname,
                    'contact_number'=> $faker->e164PhoneNumber,     
                    'address' => $faker->address,
                ]);
            };
    }
}
