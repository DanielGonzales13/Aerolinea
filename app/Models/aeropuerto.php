<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aeropuerto extends Model
{
    public $table = 'aeropuertos';

    public $fillable = [
        'descripcion',
        'coordenada',
        'nomenclatura',
        'iddepto',
        'idmupio'
    ];

    protected $casts = [
        'descripcion' => 'string',
        'coordenada' => 'string',
        'nomenclatura' => 'string',
        'iddepto' => 'integer',
        'idmupio' => 'integer'
    ];

    public static array $rules = [
        'descripcion' => 'required',
        'coordenada' => 'required',
        'nomenclatura' => 'required',
        'iddepto' => 'required',
        'idmupio' => 'required'
    ];

    
}
