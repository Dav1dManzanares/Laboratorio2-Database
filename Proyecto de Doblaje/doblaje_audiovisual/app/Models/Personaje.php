<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    // Especificamos la tabla, en caso de que no siga la convención por defecto.
    protected $table = 'personajes';

    // Definimos los campos que se pueden asignar masivamente.
    protected $fillable = [
        'nombre',
        'descripcion',
        'proyecto_id'
    ];

    /**
     * Relación: Cada Personaje pertenece a un Proyecto.
     */
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }

    /**
     * Relación muchos a muchos con Actor a través de la tabla pivote "registro_vocal".
     */
    public function actores()
    {
        return $this->belongsToMany(Actor::class, 'registro_vocal')
                    ->withPivot('tono', 'idioma')
                    ->withTimestamps();
    }
}
