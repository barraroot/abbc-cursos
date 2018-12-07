<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Administração ABBC',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'type' => 'admin',
            'cpf' => '37036595809',
            'nascimento' => '2018-11-26'
        ]);
    }
}
