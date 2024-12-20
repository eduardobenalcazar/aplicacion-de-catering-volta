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
        Schema::create('informacions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable(); // Hacer que description sea opcional
            $table->text('notes')->nullable();
            $table->foreignId('cliente_id')->nullable() // Hacer que cliente_id sea opcional
                ->constrained('clientes') // Nombre correcto de la tabla de referencia
                ->onDelete('cascade');
            $table->unsignedInteger('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacions');
    }
};
