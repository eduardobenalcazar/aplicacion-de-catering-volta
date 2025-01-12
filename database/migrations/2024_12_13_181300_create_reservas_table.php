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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_evento');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('tipo_evento');
            $table->string('medio_pago');
            $table->integer('numero_invitados');
            $table->text('detalles')->nullable()->after('numero_invitados');
            $table->foreignId('cliente_id') // Relación con cliente
                ->constrained('clientes') // Hace referencia a la tabla 'clientes'
                ->onDelete('cascade'); // Elimina las reservas si el cliente se elimina
            $table->timestamps();
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
