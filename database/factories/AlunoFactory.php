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

$factory->define(App\Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'nasc'  => $faker->date('Y-m-d'),
        'email'  => $faker->email,
        'password'  => bcrypt('secret'),
        'rg'  => rand(100000000, 999999999),
        'orgex'  => 'SSP',
        'cpf_cnpj'  => rand(10000000000, 99999999999),
        'filim'  => $faker->name,
        'tel'  => rand(10000000000, 99999999999),
        'cel'  => rand(10000000000, 99999999999),
        'end_cep'  => rand(10000000, 99999999),
        'end_rua'  => $faker->streetName,
        'end_num'  => rand(100000, 999999),
        'end_compl'  => $faker->secondaryAddress,
        'end_bairro'  => $faker->citySuffix,
        'end_cidade'  => $faker->city,
        'end_estado'  => $faker->stateAbbr,

        'resp_nome'  => $faker->name,
        'resp_nasc'  => $faker->date('Y-m-d'),
        'resp_rg'  => rand(100000000, 999999999),
        'resp_orgex'  => 'SSP',
        'resp_cpf_cnpj'  => rand(10000000000, 99999999999),
        'resp_cep'  => rand(10000000, 99999999),
        'resp_rua'  => $faker->streetName,
        'resp_num'  => rand(100000, 999999),
        'resp_compl'  => $faker->secondaryAddress,
        'resp_bairro'  => $faker->citySuffix,
        'resp_cidade'  => $faker->city,
        'resp_estado'  => $faker->stateAbbr,
    ];
});
