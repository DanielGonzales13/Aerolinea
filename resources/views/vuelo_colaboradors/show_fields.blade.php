<!-- Idvuelo Field -->
<div class="col-sm-12">
    {!! Form::label('idvuelo', 'Vuelo (Origen-Destino):') !!}
    <p>{{ $vueloColaborador->vuelo }}</p>
</div>

<!-- Idcolaborador Field -->
<div class="col-sm-12">
    {!! Form::label('idcolaborador', 'Colaborador:') !!}
    <p>{{ $vueloColaborador->colaborador }}</p>
</div>

<!-- Cargoasignado Field -->
<div class="col-sm-12">
    {!! Form::label('cargoAsignado', 'Cargoa signado:') !!}
    <p>{{ $vueloColaborador->cargoAsignado }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $vueloColaborador->estado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $vueloColaborador->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $vueloColaborador->updated_at }}</p>
</div>

