<?php

namespace App\Repositories;

use App\Models\pasajero;
use App\Repositories\BaseRepository;

class pasajeroRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return pasajero::class;
    }
}
