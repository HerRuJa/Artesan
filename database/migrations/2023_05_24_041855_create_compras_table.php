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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_proveedor')->references('id')->on('proveedores');
            $table->date('fecha');
            $table->double('subtotal', 9, 2);
            $table->double('iva', 9, 2);
            $table->double('total', 9, 2);
            $table->foreignId('usuario_id')->references('id')->on('users');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
