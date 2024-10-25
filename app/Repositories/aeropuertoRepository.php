<?php

namespace App\Repositories;

use App\Models\aeropuerto;
use App\Repositories\BaseRepository;

class aeropuertoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'descripcion',
        'coordenada',
        'nomenclatura',
        'iddepto',
        'idmupio'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return aeropuerto::class;
    }
}
