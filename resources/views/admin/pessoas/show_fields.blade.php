<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pessoa->id !!}</p>
    <hr>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $pessoa->nome !!}</p>
    <hr>
</div>

<!-- Cpf Field -->
<div class="form-group">
    {!! Form::label('cpf', 'Cpf:') !!}
    <p>{!! $pessoa->cpf !!}</p>
    <hr>
</div>

<!-- Idmembro Field -->
<div class="form-group">
    {!! Form::label('idmembro', 'Id de Membro:') !!}
    <p>{!! $pessoa->idmembro !!}</p>
    <hr>
</div>

<!-- Dataafiliacao Field -->
<div class="form-group">
    {!! Form::label('dataafiliacao', 'Data de Afiliacao:') !!}
    <p>{!! $pessoa->dataafiliacao !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('created', 'Criado em:') !!}
    <p>{!! $pessoa->created_at !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('updated', 'Última Atualização:') !!}
    <p>{!! $pessoa->updated_at !!}</p>
    <hr>
</div>
