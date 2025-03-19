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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('nombre_servicio');
            $table->decimal('costo_base', 8, 2);
    });

    /**
     * Reverse the migrations.
     */
    {
        Schema::dropIfExists('servicios');
    }
}
};
