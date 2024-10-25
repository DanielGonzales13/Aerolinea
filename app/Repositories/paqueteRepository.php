<?php

namespace App\Repositories;

use App\Models\paquete;
use App\Repositories\BaseRepository;

class paqueteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'precio',
        'descripcion'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return paquete::class;
    }
}
