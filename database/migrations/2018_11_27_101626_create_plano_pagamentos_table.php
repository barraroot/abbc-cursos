<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('parcelas');
            $table->enum('type', array('mensal', 'anual'));
            $table->datetime('vencimento');
            $table->decimal('valor', 8, 2);
            $table->decimal('desconto', 8, 2)->default(0);
            $table->decimal('juros', 8, 2)->default(0);
            $table->decimal('multa', 8, 2)->default(0);
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
        Schema::dropIfExists('plano_pagamentos');
    }
}
