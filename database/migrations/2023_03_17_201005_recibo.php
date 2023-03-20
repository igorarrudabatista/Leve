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
        Schema::create('recibo', function (Blueprint $table) {

        $table->increments('id');
        $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade');
      //  $table->foreignId('produtos_id')->constrained('produtos')->onDelete('cascade');
        $table->json('DescProdutos')->nullable();
        $table->string('DataEntrega')->nullable();
        $table->string('DataRetirada')->nullable();
        $table->string('Descrição')->nullable();
        $table->string('MensagemCliente')->nullable();
        $table->string('Observacoes')->nullable();

        $table->timestamps();


        // Cliente 
        // Data de Entrega
        // Data da Retirada
        // ID s
        // Descrição (produto)
        // Qtd. Entregue
        // Qtd. Retirada
        // Mensagem para o cliente
        // Observações
        // Campo para Assinaturas (cliente e empresa)
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibo');

    }
};
