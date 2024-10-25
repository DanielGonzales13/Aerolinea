<?php

namespace App\Repositories;

use App\Models\vuelo_colaborador;
use App\Repositories\BaseRepository;

class vuelo_colaboradorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'idvuelo',
        'idcolaborador',
        'cargoAsignado',
        'estado'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return vuelo_colaborador::class;
    }
}
