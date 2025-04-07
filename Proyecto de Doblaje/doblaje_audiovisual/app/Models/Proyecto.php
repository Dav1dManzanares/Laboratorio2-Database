<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'cliente',
        'acento_requerido',
        'adaptacion_cultural',
        'fecha_inicio',
        'fecha_fin',
    ];

    // Relación: Un proyecto tiene muchos personajes.
    public function personajes()
    {
         return $this->hasMany(Personaje::class);
    }

    // Si tu diagrama lo indica, podrías agregar:
    // Relación: Un proyecto tiene muchos segmentos.
    public function segmentos()
    {
         return $this->hasMany(Segmento::class);
    }

    // Relación: Un proyecto puede tener varias regalías.
    public function regalias()
    {
         return $this->hasMany(Regalia::class);
    }
}
