<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->firstName($gender = 'male'|'female'),
        "email" => $faker->email,
        "address" =>$faker->address,
        "salary" =>$faker->numberBetween($min = 500, $max = 1000),
        "status" =>$faker->randomElement($array = array (0, 1)),
        "department_id" => $faker->numberBetween($min = 0, $max = 5)
    ];
});
