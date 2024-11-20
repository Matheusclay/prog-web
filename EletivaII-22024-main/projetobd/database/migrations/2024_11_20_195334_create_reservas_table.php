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
    Schema::create('reservas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('quarto_id'); 
        $table->string('nome_hospede'); 
        $table->date('data_entrada'); 
        $table->date('data_saida'); 
        $table->timestamps();

        // Chave estrangeira
        $table->foreign('quarto_id')->references('id')->on('quartos')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
