<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Instalacion;

class Almacenamiento extends Model
{
    use HasFactory;

    protected $table = 'almacenamiento_distribuido';

    protected $fillable = [
        'instalacion_id',
        'fecha',
        'capacidad_almacenada'
    ];

    public function instalacion()
    {
        return $this->belongsTo(Instalacion::class);
    }
}
