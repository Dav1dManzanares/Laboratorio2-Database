<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industria; // Asegúrate de importar el modelo correcto

class IndustriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industrias = [
            [
                'nombre' => 'Industria Química del Sur',
                'direccion' => 'Av. Industrial 123, Zona Sur',
                'email' => 'contacto@quimicasur.com',  
            ],
            [
                'nombre' => 'Plásticos y Derivados',
                'direccion' => 'Calle Manufactura 456, Parque Industrial',
                'email' => 'info@plasticosderivados.com',  
            ],
            [
                'nombre' => 'Metales del Norte',
                'direccion' => 'Blvd. Metalúrgico 789, Zona Norte',
                'email' => 'contacto@metalesnorte.com',  // Cambiado de 'email' a 'correo'
            ],
            [
                'nombre' => 'Industria Química del Sur',
                'direccion' => 'Av. Industrial 123, Zona Sur',
                'email' => 'contacto@quimicasur.com',  
            ],
            [
                'nombre' => 'Plásticos y Derivados',
                'direccion' => 'Calle Manufactura 456, Parque Industrial',
                'email' => 'info@plasticosderivados.com',  
            ],
            [
                'nombre' => 'Metales del Norte',
                'direccion' => 'Blvd. Metalúrgico 789, Zona Norte',
                'email' => 'contacto@metalesnorte.com',  // Cambiado de 'email' a 'correo'
            ],
            [
                'nombre' => 'Industria Química del Sur',
                'direccion' => 'Av. Industrial 123, Zona Sur',
                'email' => 'contacto@quimicasur.com',  
            ],
            [
                'nombre' => 'Plásticos y Derivados',
                'direccion' => 'Calle Manufactura 456, Parque Industrial',
                'email' => 'info@plasticosderivados.com',  
            ],
            [
                'nombre' => 'Metales del Norte',
                'direccion' => 'Blvd. Metalúrgico 789, Zona Norte',
                'email' => 'contacto@metalesnorte.com',  // Cambiado de 'email' a 'correo'
            ],


        ];

        foreach ($industrias as $industria) {
            Industria::create($industria);
        }
    }
}
