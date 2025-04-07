<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\instalacion;

class balance extends Model
{
use HasFactory;
protected $fillable = [
    'instalacion_id',
    'fecha',
    'balance',
];
public function instalacion()
{
    return $this->belongsTo(instalacion::class);
}
