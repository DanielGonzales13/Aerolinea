<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{
    public $table = 'vuelos';

    public $fillable = [
        'idaerolinea',
        'idaeropuerto_origen',
        'idaeropuerto_destino',
        'fecha_salida',
        'fecha_llegada',
        'maximo_pasajeros'
    ];

    protected $casts = [
        'idaerolinea' => 'integer',
        'idaeropuerto_origen' => 'integer',
        'idaeropuerto_destino' => 'integer',
        'fecha_salida' => 'date',
        'fecha_llegada' => 'date',
        'maximo_pasajeros' => 'integer'
    ];

    public static array $rules = [
        'idaerolinea' => 'required',
        'idaeropuerto_origen' => 'required',
        'idaeropuerto_destino' => 'required',
        'fecha_salida' => 'required',
        'fecha_llegada' => 'required',
        'maximo_pasajeros' => 'required'
    ];

    
}
