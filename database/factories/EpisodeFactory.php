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
$factory->define(App\Models\Episode::class, function (Faker $faker) {
    return [
        'series_id' => factory(\App\Models\Series::class)->create()->id,
        'episode' => $faker->numberBetween(1, 100),
        'title' => $faker->text(127),
        'description' => $faker->paragraph,
        'video' => $faker->text(127)
    ];
});
