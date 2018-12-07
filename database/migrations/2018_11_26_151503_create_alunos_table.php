<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome',120);
            $table->datetime('nasc');

            $table->string('email',120);
            $table->string('password');
            $table->rememberToken();

            $table->string('rg', 15)->nullable();
            $table->string('orgex', 8)->nullable();
            $table->string('cpf_cnpj',15)->unique();
            $table->string('filim', 65)->nullable();
            $table->string('tel',11)->nullable();
            $table->string('cel',11)->nullable();

            $table->string('end_cep', 8)->nullable();
            $table->string('end_rua', 120)->nullable();
            $table->string('end_num', 20)->nullable();
            $table->string('end_compl',60)->nullable();
            $table->string('end_bairro', 80)->nullable();
            $table->string('end_cidade', 80)->nullable();
            $table->string('end_estado', 2)->nullable();


            $table->string('resp_nome',120)->nullable();
            $table->datetime('resp_nasc')->nullable();
            $table->string('resp_rg', 15)->nullable();
            $table->string('resp_orgex', 8)->nullable();
            $table->string('resp_cpf_cnpj',15)->nullable();

            $table->string('resp_cep', 8)->nullable();
            $table->string('resp_rua', 120)->nullable();
            $table->string('resp_num', 20)->nullable();
            $table->string('resp_compl',60)->nullable();
            $table->string('resp_bairro', 80)->nullable();
            $table->string('resp_cidade', 80)->nullable();
            $table->string('resp_estado', 2)->nullable();            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
