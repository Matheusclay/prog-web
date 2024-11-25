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
        $table->unsignedBigInteger('hospede_id'); 
        $table->date('data_inicio'); 
        $table->date('data_fim'); 
        $table->timestamps();

        // Chave estrangeira
        $table->foreign('hospede_id')->references('id')->on('hospedes')->onDelete('cascade');
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
