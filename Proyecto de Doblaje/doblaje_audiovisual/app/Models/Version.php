<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table = 'versiones';

    // Campos que aparecen en tu diagrama: id, numero_version, segmento_id, fecha_creacion
    protected $fillable = [
        'numero_version',
        'segmento_id',
        'fecha_creacion',
    ];

    /**
     * Relación: Una versión pertenece a un segmento.
     */
    public function segmento()
    {
        return $this->belongsTo(Segmento::class, 'segmento_id', 'id');
    }

    /**
     * Relación: Una versión puede tener muchas aprobaciones de cliente.
     * (Si tu diagrama indica esa relación con la tabla aprobaciones_cliente).
     */
    public function aprobacionesCliente()
    {
        return $this->hasMany(AprobacionCliente::class, 'version_id', 'id');
    }
}
// Compare this snippet from doblaje_audiovisual/app/Models/Reserva.php:
// <?php
// namespace App\Models;
//
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
//
// class Reserva extends Model