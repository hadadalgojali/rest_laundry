<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
      'first_name'  => $faker->sentence,
      'last_name'  => $faker->sentence,
      'address'  => $faker->paragraph,
      'birthday'  => $faker->date,
      'phone'  => $faker->sentence,
      'email'  => $faker->sentence,
    ];
});
