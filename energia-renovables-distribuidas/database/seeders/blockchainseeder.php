<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\blockchain;
use App\Models\instalaciones;

class blockchainseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blockchains = [
            [
                'instalacion_id' => 1,
                'fecha' => '2023-01-01',
                'blockchain' => 100.00,
            ],
            [
                'instalacion_id' => 2,
                'fecha' => '2023-01-02',
                'blockchain' => 200.00,
            ],
        ];

        foreach ($blockchains as $blockchain) {
            blockchain::create($blockchain);
        }
    }
}
