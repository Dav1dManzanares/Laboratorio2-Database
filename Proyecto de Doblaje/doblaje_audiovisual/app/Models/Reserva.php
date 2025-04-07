<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'sala_id',
        'fecha_reserva',
        'hora_inicio',
        'hora_fin',
        'nivel_complejidad',
        // 'nombre' // solo si realmente existe en la BD
    ];

    public function sala()
    {
        return $this->belongsTo(Sala::class, 'sala_id', 'id');
    }
}
