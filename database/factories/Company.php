<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'nume' => $faker->company,
        'cui' => $faker->randomNumber(8, true),
        'nr_reg_comert' => 'J' . $faker->randomNumber(2, true) . '/' . $faker->randomNumber(3, true) . '/' . $faker->dayOfMonth . '/' . $faker->month . '/' . $faker->year,
        'email' => $faker->companyEmail,
        'reprezentant' => $faker->name,
        'site' => $faker->domainName,
    ];
});
