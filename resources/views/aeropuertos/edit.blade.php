@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Editar Aeropuerto
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($aeropuerto, ['route' => ['aeropuertos.update', $aeropuerto->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('aeropuertos.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('aeropuertos.index') }}" class="btn btn-default"> Cancel </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        // Detecta cambios en el campo "Departamento"
        $('#iddepto').change(function() {
            var iddepto = $(this).val(); // Obtiene el ID del departamento seleccionado
            console.log("cambio");
            // Llama a la ruta para obtener los municipios del departamento seleccionado
            $.ajax({
                url: '/aeropuertos/municipios/' + iddepto,
                type: 'GET',
                success: function(data) {
                    // Limpia el campo "Municipio" antes de cargar los nuevos municipios
                    $('#idmupio').empty();
                    
                    // Agrega cada municipio como opción en el selector
                    $.each(data, function(key, value) {
                        $('#idmupio').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        });
    });
</script>

@endsection
