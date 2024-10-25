<?php

namespace App\Repositories;

use App\Models\departamento;
use App\Repositories\BaseRepository;

class departamentoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return departamento::class;
    }
}
