<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Instalacion;
use App\Models\Measurement;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function test(): JsonResponse
    {
        $results = [
            'instalaciones' => Instalacion::count(),
            'measurements' => Measurement::count(),
            'balances' => Balance::count(),
        ];

        return response()->json([
            'status' => 'success',
            'data' => $results,
            'message' => 'Sistema funcionando correctamente'
        ]);
    }
}
