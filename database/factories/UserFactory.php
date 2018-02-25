<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
<<<<<<< HEAD
  //  	'firts_name' => '',
  //          'last_name' => '',
  //          'email' => '',
  //          'password' => ''
  //      
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
=======

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
