<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    public $table = 'colaboradors';

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
        'puesto',
        'estad'
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
        'puesto' => 'string',
        'estad' => 'string'
    ];

    public static array $rules = [
        'primerNombre' => 'required',
        'segundoNombre' => 'required',
        'primerApellido' => 'required',
        'segundoApellido' => 'required',
        'DPI' => 'required',
        'NIT' => 'required',
        'FechaNacimiento' => 'required',
        'correo' => 'required',
        'telefono' => 'required',
        'genero' => 'required',
        'puesto' => 'required',
        'estad' => 'required'
    ];

    
}
