<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $classificacao->id !!}</p>
    <hr>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $classificacao->nome !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('criadoEm', 'Criado em:') !!}
    <p>{!! $classificacao->created_at !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('atualizadoEm', 'Ultima Atualização:') !!}
    <p>{!! $classificacao->updated_at !!}</p>
    <hr>
</div>
