<?php

namespace App\Repositories;

use App\Models\municipio;
use App\Repositories\BaseRepository;

class municipioRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'iddepto',
        'municipio'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return municipio::class;
    }
}
