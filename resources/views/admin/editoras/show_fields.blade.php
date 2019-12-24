<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $editora->id !!}</p>
    <hr>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $editora->nome !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('created', 'Criada em:') !!}
    <p>{!! $editora->created_at !!}</p>
    <hr>
</div>

<div class="form-group">
    {!! Form::label('updated', 'Última Atualização:') !!}
    <p>{!! $editora->updated_at !!}</p>
    <hr>
</div>
