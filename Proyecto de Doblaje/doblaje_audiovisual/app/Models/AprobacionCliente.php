<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AprobacionCliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_id',
        'aprobado',         // Puede ser booleano o, si es otro tipo, ajustalo según corresponda.
        'fecha_aprobacion',
    ];

    /**
     * Relación: Cada aprobación pertenece a una versión.
     */
    public function version()
    {
        return $this->belongsTo(Version::class, 'version_id');
    }
}
