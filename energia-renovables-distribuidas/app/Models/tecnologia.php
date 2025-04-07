<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class tecnologia extends Model
{
    use HasFactory;
    protected $fillable = [
        'instalacion_id',
        'fecha',
        'tecnologia',
    ];
    public function instalacion()
    {
        return $this->belongsTo(instalacion::class);
    }
}
