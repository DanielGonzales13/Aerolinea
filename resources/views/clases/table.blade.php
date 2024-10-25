<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="clases-table">
            <thead>
            <tr>
                <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clases as $clase)
                <tr>
                    <td>{{ $clase->descripcion }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['clases.destroy', $clase->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('clases.show', [$clase->id]) }}"
                               class='btn btn-primary btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('clases.edit', [$clase->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $clases])
        </div>
    </div>
</div>
