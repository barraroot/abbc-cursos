<?php

use Faker\Generator as Faker;

$factory->define(App\Unidade::class, function (Faker $faker) {
    return [
        'cidade'  => $faker->city,
        'estado'  => $faker->stateAbbr,
        'nome' => $faker->sentence
    ];
});
