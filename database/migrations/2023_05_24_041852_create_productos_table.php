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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',80);
            $table->string('descripcion',80);
            $table->integer('existencia');
            $table->double('precio_compra', 6, 2);
            $table->double('precio_venta', 6, 2);
            $table->integer('stock');
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('id_proveedor')->references('id')->on('proveedores');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
