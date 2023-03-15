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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

            

            $table->unsignedBigInteger(column:'created_by')->nullable();
            $table->foreign(columns:'created_by')->references(columns:'id')->on(table: 'users');
            $table->unsignedBigInteger(column:'updated_by')->nullable();
            $table->foreign(columns:'updated_by')->references(columns:'id')->on(table: 'users');
            $table->unsignedBigInteger(column:'deleted_by')->nullable();
            $table->foreign(columns:'deleted_by')->references(columns:'id')->on(table: 'users');
            $table->softDeletes();
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
        Schema::dropIfExists('agenda');

    }
};
