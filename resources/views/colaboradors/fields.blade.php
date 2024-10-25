<!-- Primernombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerNombre', 'Primernombre:') !!}
    {!! Form::text('primerNombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Segundonombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoNombre', 'Segundonombre:') !!}
    {!! Form::text('segundoNombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Primerapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerApellido', 'Primerapellido:') !!}
    {!! Form::text('primerApellido', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Segundoapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoApellido', 'Segundoapellido:') !!}
    {!! Form::text('segundoApellido', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Dpi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DPI', 'Dpi:') !!}
    {!! Form::text('DPI', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIT', 'Nit:') !!}
    {!! Form::text('NIT', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::text('FechaNacimiento', null, ['class' => 'form-control','id'=>'FechaNacimiento']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#FechaNacimiento').datepicker()
    </script>
@endpush

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Puesto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puesto', 'Puesto:') !!}
    {!! Form::text('puesto', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Estad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estad', 'Estado:') !!}
    {!! Form::text('estad', null, ['class' => 'form-control', 'required']) !!}
</div>