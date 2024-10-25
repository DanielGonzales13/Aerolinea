<!-- Idclase Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clase', 'Clase:') !!}
    {!! Form::select('idclase', $claseItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control', 'required']) !!}
</div>