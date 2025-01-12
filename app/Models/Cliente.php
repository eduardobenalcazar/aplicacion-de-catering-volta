<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'image'];
    use HasFactory;

    public function informacion(): HasOne
    {
        return $this->hasOne(Informacion::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
