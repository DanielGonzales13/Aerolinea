<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Coordenada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coordenada', 'Coordenada:') !!}
    {!! Form::text('coordenada', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Nomenclatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomenclatura', 'Nomenclatura:') !!}
    {!! Form::text('nomenclatura', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Iddepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Departamento', 'Departamento:') !!}
    {!! Form::select('iddepto', ['' => 'Seleccionar Departamento'] + $departamentoItems, null, ['class' => 'form-control custom-select', 'id' => 'iddepto']) !!}</div>

<!-- Idmupio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Municipio', 'Municipio:') !!}
    {!! Form::select('idmupio', $municipioItems, null, ['class' => 'form-control custom-select', 'id' => 'idmupio']) !!}
</div>