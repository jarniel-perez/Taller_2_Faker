<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equipo;
use Faker\Generator as Faker;

$factory->define(App\Equipo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'pais' => $faker->country,
        'color' => $faker->colorName,
        'email' => $faker->safeEmail,
        'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
