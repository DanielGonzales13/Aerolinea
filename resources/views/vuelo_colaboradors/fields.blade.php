<!-- Idvuelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idvuelo', 'Vuelo (Origen-Destino):') !!}
    {!! Form::select('idvuelo', $vueloItem, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Idcolaborador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcolaborador', 'Colaborador:') !!}
    {!! Form::select('idcolaborador', $colaboradorItem, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Cargoasignado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargoAsignado', 'Cargo asignado:') !!}
    {!! Form::text('cargoAsignado', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'required']) !!}
</div>