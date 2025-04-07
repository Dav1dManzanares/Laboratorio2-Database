<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consumo extends Model
{
    use HasFactory;

    protected $table = 'measurements';
    
    protected $fillable = [
        'instalacion_id',
        'potencia_actual',
        'energia_acumulada',
        'fecha_hora_medicion'
    ];

    protected $casts = [
        'fecha_hora_medicion' => 'datetime'
    ];

    public function instalacion()
    {
        return $this->belongsTo(Instalacion::class);
    }
}
