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

$factory->define(App\House::class, function (Faker $faker) {
    return [
        'owner' => $faker->name,
        'description' => $faker->paragraph(3, true),
        'contract' => $faker->randomElement(['rent','buy','prehabbing','flip']),
        'address' => $faker->address(),
        'price' => $faker->numberBetween(1000, 99999),
        'rating' => $faker->numberBetween(1, 10),
        'quality' => $faker->numberBetween(1, 10),
        'duration' => $faker->numberBetween(1, 1000),
    ];
});