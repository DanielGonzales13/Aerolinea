<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="aerolineas-table">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th>Pais</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($aerolineas as $aerolinea)
                <tr>
                    <td>{{ $aerolinea->descripcion }}</td>
                    <td>{{ $aerolinea->pais }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['aerolineas.destroy', $aerolinea->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('aerolineas.show', [$aerolinea->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('aerolineas.edit', [$aerolinea->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $aerolineas])
        </div>
    </div>
</div>
