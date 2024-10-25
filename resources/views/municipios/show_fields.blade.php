<!-- Iddepto Field -->
<div class="col-sm-12">
    {!! Form::label('Depto.', 'Depto:') !!}
    <p>{{ $municipio->descripcion }}</p>
</div>

<!-- Municipio Field -->
<div class="col-sm-12">
    {!! Form::label('municipio', 'Municipio:') !!}
    <p>{{ $municipio->municipio }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $municipio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $municipio->updated_at }}</p>
</div>

