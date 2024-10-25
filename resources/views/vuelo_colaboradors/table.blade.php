<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="vuelo_colaboradors-table">
            <thead>
            <tr>
                <th>Vuelo (Origen-Destino)</th>
                <th>Colaborador</th>
                <th>Cargo asignado</th>
                <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vueloColaboradors as $vueloColaborador)
                <tr>
                    <td>{{ $vueloColaborador->vuelo }}</td>
                    <td>{{ $vueloColaborador->colaborador }}</td>
                    <td>{{ $vueloColaborador->cargoAsignado }}</td>
                    <td>{{ $vueloColaborador->estado }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['vuelo_colaboradors.destroy', $vueloColaborador->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('vuelo_colaboradors.show', [$vueloColaborador->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('vuelo_colaboradors.edit', [$vueloColaborador->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $vueloColaboradors])
        </div>
    </div>
</div>
