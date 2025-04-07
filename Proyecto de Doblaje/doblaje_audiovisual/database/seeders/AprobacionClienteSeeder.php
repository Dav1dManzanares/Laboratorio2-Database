<?php

namespace Database\Seeders;

use App\Models\AprobacionCliente;
use App\Models\Version;
use Illuminate\Database\Seeder;

class AprobacionClienteSeeder extends Seeder
{
    public function run(): void
    {
        AprobacionCliente::factory(10)->create();
    }
}
