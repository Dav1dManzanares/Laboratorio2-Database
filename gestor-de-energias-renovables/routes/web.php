<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'test']);

// Ruta de diagnóstico
Route::get('/diagnostic', function() {
    return [
        'php_version' => PHP_VERSION,
        'laravel_version' => app()->version(),
        'database_connection' => DB::connection()->getPdo() ? 'OK' : 'Failed',
        'environment' => app()->environment(),
    ];
});
