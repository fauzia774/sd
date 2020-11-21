<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Depertment;
use Faker\Generator as Faker;

$factory->define(Depertment::class, function (Faker $faker) {
    return [
         "name" => $faker->firstName($gender ='male'|'female'),
        "short_name" => $faker->lastName,
    ];
});
