<!-- Idpasajero Field -->
<div class="col-sm-12">
    {!! Form::label('idpasajero', 'Pasajero:') !!}
    <p>{{ $reservacion->pasajero }}</p>
</div>

<!-- Asiento Field -->
<div class="col-sm-12">
    {!! Form::label('asiento', 'Asiento:') !!}
    <p>{{ $reservacion->asiento }}</p>
</div>

<!-- Idclase Field -->
<div class="col-sm-12">
    {!! Form::label('idclase', 'Clase:') !!}
    <p>{{ $reservacion->clase }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $reservacion->estado }}</p>
</div>

<!-- Idpaquete Field -->
<div class="col-sm-12">
    {!! Form::label('idpaquete', 'Paquete:') !!}
    <p>{{ $reservacion->paquete }}</p>
</div>

<!-- Fecha Reserva Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_reserva', 'Fecha Reserva:') !!}
    <p>{{ $reservacion->fecha_reserva }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reservacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reservacion->updated_at }}</p>
</div>

