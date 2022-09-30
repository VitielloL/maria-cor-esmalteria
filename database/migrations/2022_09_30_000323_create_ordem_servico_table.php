<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->id();
            $table->date('data_inicio');
            $table->date('data_previsao');
            $table->date('data_fim');
            $table->decimal('valor_total_material');
            $table->decimal('valor_servico');
            $table->decimal('valor_pago');
            $table->integer('cliente')->unsigned();
            $table->integer('colaborador')->unsigned();
            $table->integer('servico')->unsigned();
            $table->integer('material')->unsigned();
            $table->boolean('status_pagamento');
            $table->timestamps();
            $table->foreign('cliente')->references('id')->on('cliente')->onDelete('cascade');
            $table->foreign('colaborador')->references('id')->on('colaborador')->onDelete('cascade');
            $table->foreign('servico')->references('id')->on('servico')->onDelete('cascade');
            $table->foreign('material')->references('id')->on('material')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordem_servico');
    }
};
