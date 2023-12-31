<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->id();

            $table->date("data_vencimento")->comment("data de vencimento");
            $table->date("data_pagamento")->comment("data do pagamento");
            $table->string("nome_conta");
            $table->string("categoria")->comment("Nome da Categoria");
            $table->string("descricao")->comment("descricao conta");
            $table->boolean("status_pagamento")->comment("Status pagamento");

            

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
        Schema::dropIfExists('arquivos');
    }
};
