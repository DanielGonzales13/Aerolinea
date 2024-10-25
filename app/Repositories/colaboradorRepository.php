<?php

namespace App\Repositories;

use App\Models\colaborador;
use App\Repositories\BaseRepository;

class colaboradorRepository extends BaseRepository
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
        'puesto',
        'estad'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return colaborador::class;
    }
}
