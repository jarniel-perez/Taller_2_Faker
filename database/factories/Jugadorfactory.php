<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jugador;
use Faker\Generator as Faker;

$factory->define(App\Jugador::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'apellido' => $faker->lastName,
      'equipo_id' => App\Equipo::inRandomOrder()->value('id'),
      'edad' => $faker->numberBetween($min = 18, $max = 45),
      'pais' => $faker->country,
      'email' => $faker->safeEmail,
      'telefono' => $faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
