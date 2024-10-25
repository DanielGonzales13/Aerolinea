<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="vuelos-table">
            <thead>
            <tr>
                <th>Aerolinea</th>
                <th>Aeropuerto Origen</th>
                <th>Aeropuerto Destino</th>
                <th>Fecha Salida</th>
                <th>Fecha Llegada</th>
                <th>Maximo Pasajeros</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vuelos as $vuelo)
                <tr>
                    <td>{{ $vuelo->aerolinea }}</td>
                    <td>{{ $vuelo->aorigen }}</td>
                    <td>{{ $vuelo->adestino }}</td>
                    <td>{{ $vuelo->fecha_salida }}</td>
                    <td>{{ $vuelo->fecha_llegada }}</td>
                    <td>{{ $vuelo->maximo_pasajeros }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['vuelos.destroy', $vuelo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('vuelos.show', [$vuelo->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('vuelos.edit', [$vuelo->id]) }}"
                               class='btn btn-success btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Esta seguro de eliminar este registro?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $vuelos])
        </div>
    </div>
</div>
