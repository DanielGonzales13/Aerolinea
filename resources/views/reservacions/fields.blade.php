<!-- Idpasajero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpasajero', 'Idpasajero:') !!}
    {!! Form::select('idpasajero', ['primerNombre' => 'primerNombre', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Asiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asiento', 'Asiento:') !!}
    {!! Form::text('asiento', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Idclase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idclase', 'Idclase:') !!}
    {!! Form::select('idclase', ['descripcion' => 'descripcion', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Idpaquete Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpaquete', 'Idpaquete:') !!}
    {!! Form::select('idpaquete', ['descripcion' => 'descripcion', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Fecha Reserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_reserva', 'Fecha Reserva:') !!}
    {!! Form::text('fecha_reserva', null, ['class' => 'form-control','id'=>'fecha_reserva']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_reserva').datepicker()
    </script>
@endpush