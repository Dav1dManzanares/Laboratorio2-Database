<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'huella_carbono_id',
        'industria_id',
        'tratamiento_id',
    ];

    public function huellaCarbono()
    {
        return $this->belongsTo(HuellaCarbono::class);
    }
    public function industria()
    {
        return $this->belongsTo(industria::class);
    }
    public function tratamiento()
    {
        return $this->belongsTo(tratamiento::class);
    }
}
