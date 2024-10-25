<!-- Primernombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerNombre', 'Primer Nombre:') !!}
    {!! Form::text('primerNombre', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Segundonombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoNombre', 'Segundo Nombre:') !!}
    {!! Form::text('segundoNombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Primerapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primerApellido', 'Primer Apellido:') !!}
    {!! Form::text('primerApellido', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Segundoapellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('segundoApellido', 'Segundo Apellido:') !!}
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
    {!! Form::text('NIT', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FechaNacimiento', 'Fecha nacimiento:') !!}
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

<!-- Profesion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profesion', 'Profesión:') !!}
    {!! Form::text('profesion', null, ['class' => 'form-control']) !!}
</div>