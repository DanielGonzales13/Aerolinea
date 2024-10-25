<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aerolinea extends Model
{
    public $table = 'aerolineas';

    public $fillable = [
        'descripcion',
        'pais'
    ];

    protected $casts = [
        'descripcion' => 'string',
        'pais' => 'string'
    ];

    public static array $rules = [
        'descripcion' => 'required',
        'pais' => 'required'
    ];

    
}
