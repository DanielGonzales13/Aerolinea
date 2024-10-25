<!-- Descripcion Field -->
<div class="col-sm-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $aeropuerto->descripcion }}</p>
</div>

<!-- Coordenada Field -->
<div class="col-sm-12">
    {!! Form::label('coordenada', 'Coordenada:') !!}
    <p>{{ $aeropuerto->coordenada }}</p>
</div>

<!-- Nomenclatura Field -->
<div class="col-sm-12">
    {!! Form::label('nomenclatura', 'Nomenclatura:') !!}
    <p>{{ $aeropuerto->nomenclatura }}</p>
</div>

<!-- Iddepto Field -->
<div class="col-sm-12">
    {!! Form::label('Departamento', 'Departamento:') !!}
    <p>{{ $aeropuerto->depto }}</p>
</div>

<!-- Idmupio Field -->
<div class="col-sm-12">
    {!! Form::label('Municipio', 'Municipio:') !!}
    <p>{{ $aeropuerto->municipio }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $aeropuerto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $aeropuerto->updated_at }}</p>
</div>

