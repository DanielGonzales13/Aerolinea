<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="aeropuertos-table">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th>Coordenada</th>
                <th>Nomenclatura</th>
                <th>Departamento</th>
                <th>Departamento</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($aeropuertos as $aeropuerto)
                <tr>
                    <td>{{ $aeropuerto->descripcion }}</td>
                    <td>{{ $aeropuerto->coordenada }}</td>
                    <td>{{ $aeropuerto->nomenclatura }}</td>
                    <td>{{ $aeropuerto->depto }}</td>
                    <td>{{ $aeropuerto->municipio }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['aeropuertos.destroy', $aeropuerto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('aeropuertos.show', [$aeropuerto->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('aeropuertos.edit', [$aeropuerto->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $aeropuertos])
        </div>
    </div>
</div>
