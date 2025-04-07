<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    protected $table = 'instalacions';
    
    protected $fillable = [
        'nombre_instalacion',
        'ubicacion',
        'usuario_id',
        'tecnologia_id',
        'capacidad_instalada'
    ];
}

namespace Database\Seeders;

use App\Models\Instalacion;
use Illuminate\Database\Seeder;

class InstalacionesSeeder extends Seeder
{
    public function run(): void
    {
        $instalaciones = [
            [
                'nombre_instalacion' => 'Instalacion 1',
                'ubicacion' => 'Location 1',
                'usuario_id' => 1,
                'tecnologia_id' => 1,
                'capacidad_instalada' => 100.00,
            ],
           
        ];

        foreach ($instalaciones as $instalacion) {
            instalacion::create($instalacion);
        }
    }
}

