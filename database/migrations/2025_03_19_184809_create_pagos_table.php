<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->decimal('monto', 10, 2);
            $table->unsignedBigInteger('medio_pago_id');

            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreign('medio_pago_id')->references('id')->on('medios_pagos')->onDelete('cascade');
        });
    }

    public function down() {
        Schema::dropIfExists('pagos');
    }
};
