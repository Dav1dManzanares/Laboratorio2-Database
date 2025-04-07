<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class consumo extends Model
{
    use HasFactory;
    protected $fillable = [
        'instalacion_id',
        'fecha',
        'consumo',
    ];
    public function instalacion()
    {
        return $this->belongsTo(instalacion::class);
    }
  
