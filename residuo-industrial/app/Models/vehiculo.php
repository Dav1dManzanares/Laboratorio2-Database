<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tratamiento;


class vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'capacidad',
        'tipo',
        'tipo_vehiculo',
    ];


}
