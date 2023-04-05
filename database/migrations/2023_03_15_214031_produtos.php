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
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nome_Produto')->nullable();
            $table->string('Categoria_Produto')->nullable();
            $table->string('Status_Produto')->nullable();
            $table->decimal('Preco_Produto',10,4)->nullable();
            $table->string('Estoque_Produto')->nullable();
            $table->string('Quantidade_Produto')->nullable();


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
        Schema::dropIfExists('produtos');
    }
};