<!-- Nome Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-12">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmembro Field -->
<div class="form-group col-sm-12">
    {!! Form::label('idmembro', 'Id de membro:') !!}
    {!! Form::text('idmembro', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataafiliacao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dataafiliacao', 'Data de afiliacao:') !!}
    {!! Form::text('dataafiliacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.pessoas.index') !!}" class="btn btn-default">Cancel</a>
</div>
