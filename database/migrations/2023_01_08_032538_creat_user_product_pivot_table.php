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
        // Schema::create('usuario_produto', function (Blueprint $table) {
        //     $table->engine = "InnoDB";
        //     $table->integer('user_id')->unsigned();
        //     $table->integer('products_id')->unsigned();
        // });
    
        // Schema::table('usuario_produto', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        // });    }



         Schema::create('usuario_produto', function (Blueprint $table) {
             $table->engine = "InnoDB";
             $table->string('permission');
             $table->bigInteger('user_id')->unsigned();
             $table->bigInteger('products_id')->unsigned();

         //     You don't need separate schema code to create foreign
             
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
         });
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
