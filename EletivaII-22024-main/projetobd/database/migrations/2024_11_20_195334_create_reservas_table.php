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
        $table->unsignedBigInteger('hospede_id'); // Relaciona com hóspedes
        $table->date('data_inicio'); // Data de início da reserva
        $table->date('data_fim'); // Data de término da reserva
        $table->timestamps();

        // Define a chave estrangeira
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
