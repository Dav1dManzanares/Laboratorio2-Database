<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
    ];
}
