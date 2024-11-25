<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('estadias', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('quarto_id'); 
        $table->unsignedBigInteger('reserva_id');
        $table->timestamps();

        // Chaves estrangeiras
        $table->foreign('quarto_id')->references('id')->on('quartos')->onDelete('cascade');
        $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadias');
    }
};
