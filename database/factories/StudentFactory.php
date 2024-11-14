<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' =>  $faker->firstname,
        'last_name' => $faker->lastname,
        'sign' => $faker-> sentence,
        'age' => $faker-> numberBetween($min = 4, $max = 6),

    ];
});
