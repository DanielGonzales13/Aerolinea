<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pasajeros-table">
            <thead>
            <tr>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Dpi</th>
                <th>Nit</th>
                <th>Fecha Nacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Genero</th>
                <th>Profesion</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pasajeros as $pasajero)
                <tr>
                    <td>{{ $pasajero->primerNombre }}</td>
                    <td>{{ $pasajero->segundoNombre }}</td>
                    <td>{{ $pasajero->primerApellido }}</td>
                    <td>{{ $pasajero->segundoApellido }}</td>
                    <td>{{ $pasajero->DPI }}</td>
                    <td>{{ $pasajero->NIT }}</td>
                    <td>{{ $pasajero->FechaNacimiento }}</td>
                    <td>{{ $pasajero->correo }}</td>
                    <td>{{ $pasajero->telefono }}</td>
                    <td>{{ $pasajero->genero }}</td>
                    <td>{{ $pasajero->profesion }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['pasajeros.destroy', $pasajero->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('pasajeros.show', [$pasajero->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('pasajeros.edit', [$pasajero->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $pasajeros])
        </div>
    </div>
</div>
