<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    public $table = 'municipios';

    public $fillable = [
        'iddepto',
        'municipio'
    ];

    protected $casts = [
        'iddepto' => 'integer',
        'municipio' => 'string'
    ];

    public static array $rules = [
        'iddepto' => 'required',
        'municipio' => 'required'
    ];

    
}
