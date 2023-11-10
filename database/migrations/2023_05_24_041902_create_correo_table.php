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
        Schema::create('correos', function (Blueprint $table) {
            $table->id();
            $table->string('destinatario');
            $table->string('asunto');
            $table->text('mensaje');
            $table->date('fecha_envio')->default(now());;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correos');
    }
};
