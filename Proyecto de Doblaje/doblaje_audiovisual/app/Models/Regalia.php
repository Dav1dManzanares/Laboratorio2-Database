<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regalia extends Model
{
    use HasFactory;

    // Usamos el nombre 'regalias' sin tilde para evitar problemas de encoding.
    protected $table = 'regalias';

    // Define los campos que se pueden asignar masivamente.
    protected $fillable = [
        'proyecto_id',
        'porcentaje',
        'fecha_registro'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id', 'id');
    }
}
