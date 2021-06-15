<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('rg')->nullable();
            $table->string('cnpj_cpf');
            $table->dateTime('data_cadastro');
            $table->string('celular')->nullable();
            $table->string('fixo')->nullable();
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('empresa_id')->references('id')->on('empresas');
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
        Schema::dropIfExists('fornecedores');
    }
}
