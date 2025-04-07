<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WeatherData extends Model
{
    use HasFactory;

    protected $table = 'weather_data';

    protected $fillable = [
        'instalacion_id',
        'temperatura',
        'radiacion_solar',
        'velocidad_viento',
        'precipitacion',
        'fecha_hora'
    ];

    protected $casts = [
        'fecha_hora' => 'datetime'
    ];

    public function instalacion()
    {
        return $this->belongsTo(Instalacion::class);
    }
}
