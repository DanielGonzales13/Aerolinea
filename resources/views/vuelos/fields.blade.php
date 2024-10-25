<!-- Idaerolinea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Aerolinea', 'Aerolinea:') !!}
    {!! Form::select('idaerolinea', $aerolineaItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Idaeropuerto Origen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Aeropuerto_Origen', 'Aeropuerto Origen:') !!}
    {!! Form::select('idaeropuerto_origen', $aeropuertoOrigenItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Idaeropuerto Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Aeropuerto_Destino', 'Aeropuerto Destino:') !!}
    {!! Form::select('idaeropuerto_destino', $aeropuertoDestinoItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Fecha Salida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_salida', 'Fecha Salida:') !!}
    {!! Form::text('fecha_salida', null, ['class' => 'form-control','id'=>'fecha_salida']) !!}
</div>


<!-- Fecha Llegada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_llegada', 'Fecha Llegada:') !!}
    {!! Form::text('fecha_llegada', null, ['class' => 'form-control','id'=>'fecha_llegada']) !!}
</div>
@push('page_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#fecha_salida').datepicker({
                dateFormat: 'yy-mm-dd' // Cambia el formato según tus necesidades
            });
            $('#fecha_llegada').datepicker({
                dateFormat: 'yy-mm-dd' // Cambia el formato según tus necesidades
            });
        });
    </script>
@endpush

<!-- Maximo Pasajeros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maximo_pasajeros', 'Maximo Pasajeros:') !!}
    {!! Form::number('maximo_pasajeros', null, ['class' => 'form-control', 'required']) !!}
</div>