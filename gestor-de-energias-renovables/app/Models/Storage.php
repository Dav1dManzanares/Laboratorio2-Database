<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'instalacion_id',
        'tipo_almacenamiento',
        'capacidad_total',
        'nivel_actual',
        'eficiencia'
    ];

    public function instalacion()
    {
        return $this->belongsTo(Instalacion::class);
    }
}
