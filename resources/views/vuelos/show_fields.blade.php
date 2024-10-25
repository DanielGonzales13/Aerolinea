<!-- Idaerolinea Field -->
<div class="col-sm-12">
    {!! Form::label('Aerolinea', 'Aerolinea:') !!}
    <p>{{ $vuelo->aerolinea }}</p>
</div>

<!-- Idaeropuerto Origen Field -->
<div class="col-sm-12">
    {!! Form::label('Aeropuerto_Origen', 'Aeropuerto Origen:') !!}
    <p>{{ $vuelo->aorigen }}</p>
</div>

<!-- Idaeropuerto Destino Field -->
<div class="col-sm-12">
    {!! Form::label('Aeropuerto_Destino', 'Aeropuerto Destino:') !!}
    <p>{{ $vuelo->adestino }}</p>
</div>

<!-- Fecha Salida Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_salida', 'Fecha Salida:') !!}
    <p>{{ $vuelo->fecha_salida }}</p>
</div>

<!-- Fecha Llegada Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_llegada', 'Fecha Llegada:') !!}
    <p>{{ $vuelo->fecha_llegada }}</p>
</div>

<!-- Maximo Pasajeros Field -->
<div class="col-sm-12">
    {!! Form::label('maximo_pasajeros', 'Maximo Pasajeros:') !!}
    <p>{{ $vuelo->maximo_pasajeros }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $vuelo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $vuelo->updated_at }}</p>
</div>

