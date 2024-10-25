<!-- Iddepto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Depto.', 'Depto:') !!}
    {!! Form::select('iddepto', $departamentoItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control', 'required']) !!}
</div>