<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    public $table = 'paquetes';

    public $fillable = [
        'precio',
        'descripcion'
    ];

    protected $casts = [
        'precio' => 'double',
        'descripcion' => 'string'
    ];

    public static array $rules = [
        'precio' => 'required',
        'descripcion' => 'required'
    ];

    
}
