<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    static $increment = 1;
    return [
        'student_id' => ($increment++) ,
        'street_name' => $faker->streetName,
        'street_number' => $faker->buildingNumber, //numberBetween($min = 1, $max = 200),
        'zip' => $faker->numberBetween($min = 1000, $max = 9999),
        'city' => $faker->city,
        'siblings_num' => $faker->numberBetween($min = 0, $max = 5),
    ];
});
