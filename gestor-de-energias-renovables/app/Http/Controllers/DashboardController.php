<?php

namespace App\Http\Controllers;

use App\Models\Instalacion;
use App\Models\Balance;
use App\Models\WeatherData;
use Illuminate\Http\JsonResponse;

class DashboardController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'instalaciones' => Instalacion::with('usuario', 'tecnologia')->get(),
            'ultimos_balances' => Balance::with('instalacion')
                ->orderBy('fecha', 'desc')
                ->take(5)
                ->get(),
            'clima_actual' => WeatherData::orderBy('fecha_hora', 'desc')
                ->first()
        ]);
    }
}
