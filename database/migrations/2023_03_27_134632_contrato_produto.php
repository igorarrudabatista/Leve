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
        Schema::create('contrato_produto', function (Blueprint $table) {

            // $table->foreign('orcamento_id')->references('id')->on('orcamentos');
            // $table->foreign('produto_id'  )->references('id')->on('produtos');
             $table->integer('Quantidade');
     
     
               $table->unsignedInteger('contrato_id');
               $table->foreign('contrato_id')->references('id')->on('contrato')->onDelete('cascade');
               $table->unsignedInteger('produto_id');
               $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');


         });
     }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato_produto');
    }
};