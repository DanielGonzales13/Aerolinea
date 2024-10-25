<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="colaboradors-table">
            <thead>
            <tr>
                <th>Primernombre</th>
                <th>Segundonombre</th>
                <th>Primerapellido</th>
                <th>Segundoapellido</th>
                <th>Dpi</th>
                <th>Nit</th>
                <th>Fechanacimiento</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Genero</th>
                <th>Puesto</th>
                <th>Estad</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($colaboradors as $colaborador)
                <tr>
                    <td>{{ $colaborador->primerNombre }}</td>
                    <td>{{ $colaborador->segundoNombre }}</td>
                    <td>{{ $colaborador->primerApellido }}</td>
                    <td>{{ $colaborador->segundoApellido }}</td>
                    <td>{{ $colaborador->DPI }}</td>
                    <td>{{ $colaborador->NIT }}</td>
                    <td>{{ $colaborador->FechaNacimiento }}</td>
                    <td>{{ $colaborador->correo }}</td>
                    <td>{{ $colaborador->telefono }}</td>
                    <td>{{ $colaborador->genero }}</td>
                    <td>{{ $colaborador->puesto }}</td>
                    <td>{{ $colaborador->estad }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['colaboradors.destroy', $colaborador->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('colaboradors.show', [$colaborador->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('colaboradors.edit', [$colaborador->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $colaboradors])
        </div>
    </div>
</div>
