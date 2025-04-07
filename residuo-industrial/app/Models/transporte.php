<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'vehiculo_id',
        'residuo_id',
        'ruta_id',
    ];

    public function vehiculo()
    {
        return $this->belongsTo(vehiculo::class);
    }
    public function residuo()
    {
        return $this->belongsTo(residuo::class);
    }
    public function ruta()
    {
        return $this->belongsTo(ruta::class);
    }
}
