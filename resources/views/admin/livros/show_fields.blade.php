<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $livro->id !!}</p>
    <hr>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $livro->titulo !!}</p>
    <hr>
</div>

<!-- Idautor Field -->
<div class="form-group">
    {!! Form::label('idautor', 'Autor:') !!}
    <p>{!! $livro->autor->nome !!}</p>
    <hr>
</div>

<!-- Idtipo Field -->
<div class="form-group">
    {!! Form::label('idtipo', 'Tipo:') !!}
    <p>{!! $livro->tipo->nome !!}</p>
    <hr>
</div>

<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('descricao', 'Descricao:') !!}
    <p>{!! $livro->descricao !!}</p>
    <hr>
</div>

<!-- Codigobarras Field -->
<div class="form-group">
    {!! Form::label('codigobarras', 'Codigobarras:') !!}
    <p>{!! $livro->codigobarras !!}</p>
    <hr>
</div>

<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('isbn', 'Isbn:') !!}
    <p>{!! $livro->isbn !!}</p>
    <hr>
</div>

<!-- Edicao Field -->
<div class="form-group">
    {!! Form::label('edicao', 'Edicao:') !!}
    <p>{!! $livro->edicao !!}</p>
    <hr>
</div>

<!-- Ideditora Field -->
<div class="form-group">
    {!! Form::label('ideditora', 'Editora:') !!}
    <p>{!! $livro->editora->nome !!}</p>
    <hr>
</div>

<!-- Ano Field -->
<div class="form-group">
    {!! Form::label('ano', 'Ano:') !!}
    <p>{!! $livro->ano !!}</p>
    <hr>
</div>
