<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residuo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_residuo',
        'cantidad',
        'fecha_generada',
    ];
}
