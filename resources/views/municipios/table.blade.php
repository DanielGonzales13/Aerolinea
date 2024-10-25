<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="municipios-table">
            <thead>
            <tr>
                <th>Departamento</th>
                <th>Municipio</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->descripcion }}</td>
                    <td>{{ $municipio->municipio }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['municipios.destroy', $municipio->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('municipios.show', [$municipio->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('municipios.edit', [$municipio->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $municipios])
        </div>
    </div>
</div>
