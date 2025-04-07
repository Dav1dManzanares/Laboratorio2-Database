<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class mantenimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'instalacion_id',
        'fecha',
        'tipo_mantenimiento',
        'descripcion',
    ];

    public function instalacion()
    {
        return $this->belongsTo(instalacion::class);
    }
}
