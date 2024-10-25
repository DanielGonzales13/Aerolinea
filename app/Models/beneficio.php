<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    public $table = 'beneficios';

    public $fillable = [
        'idclase',
        'descripcion'
    ];

    protected $casts = [
        'idclase' => 'integer',
        'descripcion' => 'string'
    ];

    public static array $rules = [
        'idclase' => 'required',
        'descripcion' => 'required'
    ];

    
}
