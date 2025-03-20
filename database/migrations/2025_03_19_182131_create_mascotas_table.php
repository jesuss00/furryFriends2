<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('propietario_id');
            $table->string('nombre');
            $table->string('id_mascota')->unique(); 
            $table->integer('edad'); 
            $table->string('raza'); 
            $table->string('especie'); 
            $table->text('info_medica')->nullable(); // Campo para información médica (puede ser nulo)
            $table->string('genero');
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
