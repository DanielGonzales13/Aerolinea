<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $aerolinea->descripcion }}</p>
</div>

<!-- Pais Field -->
<div class="col-sm-12">
    {!! Form::label('pais', 'Pais:') !!}
    <p>{{ $aerolinea->pais }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $aerolinea->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $aerolinea->updated_at }}</p>
</div>

