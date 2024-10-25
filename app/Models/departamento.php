<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    public $table = 'departamentos';

    public $fillable = [
        'descripcion'
    ];

    protected $casts = [
        'descripcion' => 'string'
    ];

    public static array $rules = [
        'descripcion' => 'required'
    ];

    
}
