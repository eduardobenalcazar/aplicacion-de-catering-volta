<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Informacion;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model

{
    protected $fillable = ['name', 'email', 'phone'];
    // use HasFactory;
    public function informacions(): HasMany
    
    {
        return $this->hasMany(Informacion::class);
    }
}
