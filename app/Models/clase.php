<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clase extends Model
{
    public $table = 'clases';

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
