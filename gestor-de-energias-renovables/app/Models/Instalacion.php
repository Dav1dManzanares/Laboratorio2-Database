<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    use HasFactory;

    protected $table = 'instalaciones';

    protected $fillable = [
        'nombre_instalacion',
        'ubicacion',
        'usuario_id',
        'tecnologia_id',
        'capacidad_instalada'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function tecnologia()
    {
        return $this->belongsTo(Tecnologia::class, 'tecnologia_id');
    }

    public function mediciones()
    {
        return $this->hasMany(Measurement::class, 'instalacion_id');
    }

    public function balances()
    {
        return $this->hasMany(Balance::class, 'instalacion_id');
    }
}
