<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        'instalacion_id',
        'energia_generada',
        'energia_consumida',
        'balance_neto',
        'fecha'
    ];

    protected $casts = [
        'fecha' => 'date'
    ];

    public function instalacion()
    {
        return $this->belongsTo(Instalacion::class);
    }
}
