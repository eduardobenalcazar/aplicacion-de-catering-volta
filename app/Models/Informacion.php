<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Informacion extends Model
{
    protected $fillable = ['name', 'email', 'phone'];
    // use HasFactory;
    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
 
    public function reserva(): HasMany
    {
        return $this->hasMany(Reserva::class);
    }

}
