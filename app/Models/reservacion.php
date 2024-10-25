<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    public $table = 'reservacions';

    public $fillable = [
        'idpasajero',
        'asiento',
        'idclase',
        'estado',
        'idpaquete',
        'fecha_reserva'
    ];

    protected $casts = [
        'idpasajero' => 'integer',
        'asiento' => 'string',
        'idclase' => 'integer',
        'estado' => 'string',
        'idpaquete' => 'integer',
        'fecha_reserva' => 'date'
    ];

    public static array $rules = [
        'idpasajero' => 'required',
        'asiento' => 'required',
        'idclase' => 'required',
        'estado' => 'required',
        'idpaquete' => 'required',
        'fecha_reserva' => 'required'
    ];

    
}
