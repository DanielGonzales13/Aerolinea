<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo_colaborador extends Model
{
    public $table = 'vuelo_colaboradors';

    public $fillable = [
        'idvuelo',
        'idcolaborador',
        'cargoAsignado',
        'estado'
    ];

    protected $casts = [
        'idvuelo' => 'integer',
        'idcolaborador' => 'integer',
        'cargoAsignado' => 'string',
        'estado' => 'string'
    ];

    public static array $rules = [
        'idvuelo' => 'required',
        'idcolaborador' => 'required',
        'cargoAsignado' => 'required',
        'estado' => 'required'
    ];

    
}
