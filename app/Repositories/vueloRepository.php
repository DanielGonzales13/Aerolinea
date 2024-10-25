<?php

namespace App\Repositories;

use App\Models\vuelo;
use App\Repositories\BaseRepository;

class vueloRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'idaerolinea',
        'idaeropuerto_origen',
        'idaeropuerto_destino',
        'fecha_salida',
        'fecha_llegada',
        'maximo_pasajeros'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return vuelo::class;
    }
}
