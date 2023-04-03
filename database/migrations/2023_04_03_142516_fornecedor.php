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
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
        //    $table->string('Nome_Empresa')->nullable();
            $table->string('Cnpj')->nullable();
            $table->string('Nome_responsavel')->nullable();
            $table->string('Nome_fantasia')->nullable();
            $table->string('Cpf')->nullable();
            $table->string('Email')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Site')->nullable();
            $table->string('Endereco')->nullable();
            $table->string('Cidade')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cep')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('image')->nullable();


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
        Schema::dropIfExists('fornecedor');
    }
};
