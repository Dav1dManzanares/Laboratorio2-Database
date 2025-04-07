<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    // Si la tabla en la base de datos se llama 'actores'
    protected $table = 'actores';

    // Campos que se pueden asignar masivamente.
    protected $fillable = [
        'nombre',
        'email',
        'nacionalidad'
    ];

    /**
     */
    public function personajes()
    {
        return $this->belongsToMany(Personaje::class, 'registro_vocal')
                    ->withPivot('tono', 'idioma')
                    ->withTimestamps();
    }
}
