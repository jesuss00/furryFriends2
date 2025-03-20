<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('agendamiento_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('estado_pedido_id'); // Referencia a estados_pedidos
            $table->dateTime('fecha_hora');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('estado_pedido_id')->references('id_pedido')->on('estados_pedidos')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('agendamiento_servicios');
    }
};
