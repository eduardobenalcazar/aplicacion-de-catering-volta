<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'cliente_id'];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
}
