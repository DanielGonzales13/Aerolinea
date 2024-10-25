<?php

namespace App\Repositories;

use App\Models\reservacion;
use App\Repositories\BaseRepository;

class reservacionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'idpasajero',
        'asiento',
        'idclase',
        'estado',
        'idpaquete',
        'fecha_reserva'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return reservacion::class;
    }
}
