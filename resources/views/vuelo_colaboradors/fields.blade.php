<!-- Idvuelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idvuelo', 'Idvuelo:') !!}
    {!! Form::select('idvuelo', ['fecha_salida' => 'fecha_salida', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Idcolaborador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcolaborador', 'Idcolaborador:') !!}
    {!! Form::select('idcolaborador', ['primerNombre' => 'primerNombre', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Cargoasignado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargoAsignado', 'Cargoasignado:') !!}
    {!! Form::text('cargoAsignado', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'required']) !!}
</div>