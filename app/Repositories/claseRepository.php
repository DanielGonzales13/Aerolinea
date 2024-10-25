<?php

namespace App\Repositories;

use App\Models\clase;
use App\Repositories\BaseRepository;

class claseRepository extends BaseRepository
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
        return clase::class;
    }
}
