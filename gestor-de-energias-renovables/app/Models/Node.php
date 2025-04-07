<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
        'node_address',
        'node_type',
        'is_active',
        'configuration'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'configuration' => 'array'
    ];
}
