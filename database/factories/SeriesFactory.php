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

/* @noinspection PhpUndefinedVariableInspection */
$factory->define(App\Models\Series::class, function (Faker $faker) {
    return [
        'title' => $faker->text(127),
        'description' => $faker->paragraph,
    ];
});
