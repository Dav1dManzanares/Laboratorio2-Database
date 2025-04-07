<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class compensaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'instalacion_id',
        'fecha',
        'compensacion',
    ];
    public function instalacion()
    {
        return $this->belongsTo(instalacion::class);
    }
   
}
