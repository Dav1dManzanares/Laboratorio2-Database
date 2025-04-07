<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tecnologia extends Model
{
    use HasFactory;

    protected $table = 'tecnologias';

    protected $fillable = [
        'tipo_tecnologia',
        'descripcion'
    ];

    public function instalaciones()
    {
        return $this->hasMany(Instalacion::class);
    }
}
