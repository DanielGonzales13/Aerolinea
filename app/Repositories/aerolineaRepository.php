<?php

namespace App\Repositories;

use App\Models\aerolinea;
use App\Repositories\BaseRepository;

class aerolineaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'descripcion',
        'pais'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return aerolinea::class;
    }
}
