<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class blockchain extends Model
{
    use HasFactory;
    protected $fillable = [
        'instalacion_id',
        'fecha',
        'blockchain',
    ];
    public function instalacion()
    {
        return $this->belongsTo(instalacion::class);
    }
}
