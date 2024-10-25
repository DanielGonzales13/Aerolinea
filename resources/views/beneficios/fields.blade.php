<!-- Idclase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idclase', 'Idclase:') !!}
    {!! Form::select('idclase', ['descripcion' => 'descripcion', 'id' => 'id'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'required']) !!}
</div>