<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipos->id !!}</p>
    <hr>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $tipos->nome !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('nome', 'Criado em:') !!}
    <p>{!! $tipos->created_at !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('nome', 'Ultima Atualização:') !!}
    <p>{!! $tipos->updated_at !!}</p>
    <hr>
</div>
