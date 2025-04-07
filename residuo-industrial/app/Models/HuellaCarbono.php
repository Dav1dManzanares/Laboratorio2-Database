<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HuellaCarbono extends Model
{
    use HasFactory;

    protected $fillable = [
        'emicion',
        'fecha',
        'vehiculo_id',
    ];
    public function vehiculo()
    {
        return $this->belongsTo(vehiculo::class);
    }
}
