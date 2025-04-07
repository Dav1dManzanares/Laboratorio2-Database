<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefono',
        'direccion'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function instalaciones()
    {
        return $this->hasMany(Instalacion::class, 'usuario_id');
    }
}
