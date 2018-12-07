<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Aluno::class, 45)->create();
    }
}
