<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_evento',
        'hora_inicio',
        'hora_fin',
        'tipo_evento',
        'medio_pago',
        'numero_invitados',
        'cliente_id',
        'detalles',
    ];

    // Relación con cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
