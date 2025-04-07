<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlockchainTransaccion extends Model
{
    use HasFactory;

    protected $table = 'blockchain_transacciones';

    protected $fillable = [
        'instalacion_origen_id',
        'instalacion_destino_id',
        'fecha',
        'cantidad',
        'hash_transaccion'
    ];

    protected $casts = [
        'fecha' => 'date'
    ];

    public function instalacionOrigen()
    {
        return $this->belongsTo(Instalacion::class, 'instalacion_origen_id');
    }

    public function instalacionDestino()
    {
        return $this->belongsTo(Instalacion::class, 'instalacion_destino_id');
    }
}
