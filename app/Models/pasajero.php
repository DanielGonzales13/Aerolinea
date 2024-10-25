<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    public $table = 'pasajeros';

    public $fillable = [
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'DPI',
        'NIT',
        'FechaNacimiento',
        'correo',
        'telefono',
        'genero',
        'profesion'
    ];

    protected $casts = [
        'primerNombre' => 'string',
        'segundoNombre' => 'string',
        'primerApellido' => 'string',
        'segundoApellido' => 'string',
        'DPI' => 'string',
        'NIT' => 'string',
        'FechaNacimiento' => 'date',
        'correo' => 'string',
        'telefono' => 'string',
        'genero' => 'string',
        'profesion' => 'string'
    ];

    public static array $rules = [
        'primerNombre' => 'required',
        'primerApellido' => 'required',
        'segundoApellido' => 'required',
        'DPI' => 'required',
        'NIT' => 'required',
        'FechaNacimiento' => 'required',
        'correo' => 'required',
        'telefono' => 'required',
        'genero' => 'required'
    ];

    
}
