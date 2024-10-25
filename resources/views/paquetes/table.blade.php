<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="paquetes-table">
            <thead>
            <tr>
                <th>Precio</th>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($paquetes as $paquete)
                <tr>
                    <td>{{ $paquete->precio }}</td>
                    <td>{{ $paquete->descripcion }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['paquetes.destroy', $paquete->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('paquetes.show', [$paquete->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('paquetes.edit', [$paquete->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $paquetes])
        </div>
    </div>
</div>
