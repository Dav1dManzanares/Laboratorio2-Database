<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/instalaciones', function () {
    return \App\Models\Instalacion::with(['usuario', 'tecnologia'])->get();
});

Route::get('/measurements/latest', function () {
    return \App\Models\Measurement::with('instalacion')
        ->orderBy('fecha_hora_medicion', 'desc')
        ->take(10)
        ->get();
});

Route::get('/weather-data/today', function () {
    return \App\Models\WeatherData::whereDate('fecha_hora', today())
        ->orderBy('fecha_hora', 'desc')
        ->get();
});

Route::get('/dashboard', [DashboardController::class, 'index']);
