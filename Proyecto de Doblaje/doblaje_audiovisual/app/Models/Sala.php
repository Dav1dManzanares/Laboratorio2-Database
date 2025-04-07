<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    // Especifica la tabla asociada (opcional si la convención se respeta)
    protected $table = 'salas';

    // Campos que se pueden asignar masivamente.
    protected $fillable = [
        'nombre',
        'ubicacion',
        'capacidad',
    ];

    /**
     * Relación: Una sala tiene muchas reservas.
     */
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'sala_id', 'id');
    }
}
