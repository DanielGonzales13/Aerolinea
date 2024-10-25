<?php

namespace App\Repositories;

use App\Models\beneficio;
use App\Repositories\BaseRepository;

class beneficioRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'idclase',
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return beneficio::class;
    }
}
