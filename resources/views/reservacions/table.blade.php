<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="reservacions-table">
            <thead>
            <tr>
                <th>Pasajero</th>
                <th>Asiento</th>
                <th>Clase</th>
                <th>Estado</th>
                <th>Paquete</th>
                <th>Fecha Reserva</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reservacions as $reservacion)
                <tr>
                    <td>{{ $reservacion->pasajero }}</td>
                    <td>{{ $reservacion->asiento }}</td>
                    <td>{{ $reservacion->clase }}</td>
                    <td>{{ $reservacion->estado }}</td>
                    <td>{{ $reservacion->paquete }}</td>
                    <td>{{ $reservacion->fecha_reserva }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['reservacions.destroy', $reservacion->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('reservacions.show', [$reservacion->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('reservacions.edit', [$reservacion->id]) }}"
                               class='btn btn-success btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $reservacions])
        </div>
    </div>
</div>
