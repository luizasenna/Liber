<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idautor Field -->
<div class="form-group col-sm-12">
   {!! Form::label('Autor', 'Autor:') !!}
   <br/>
    <select name="idautor" class="select form-control form-control-lg">
      @foreach ($autores as $autor)
          <option value="{{$autor->id}}">{{$autor->id}} - {{$autor->nome}}</option>

      @endforeach
   </select>

</div>

<!-- Idtipo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Tipo', 'Tipo de Livro:') !!}
    <br/>
     <select name="idtipo" class="select form-control form-control-lg">
       @foreach ($tipos as $tipo)
           <option value="{{$tipo->id}}">{{$tipo->id}} - {{$tipo->nome}}</option>

       @endforeach
    </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('Classificação', 'Classificação:') !!}
    <br/>
     <select name="idclassificacao" class="select form-control form-control-lg">
       @foreach ($classificacoes as $classificacao)
           <option value="{{$classificacao->id}}">{{$classificacao->id}} - {{$classificacao->nome}}</option>

       @endforeach
    </select>
</div>
<!-- Descricao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigobarras Field -->
<div class="form-group col-sm-12">
    {!! Form::label('codigobarras', 'Codigobarras:') !!}
    {!! Form::text('codigobarras', null, ['class' => 'form-control']) !!}
</div>

<!-- Isbn Field -->
<div class="form-group col-sm-12">
    {!! Form::label('isbn', 'Isbn:') !!}
    {!! Form::text('isbn', null, ['class' => 'form-control']) !!}
</div>

<!-- Edicao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('edicao', 'Edicao:') !!}
    {!! Form::text('edicao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('Editora', 'Editora:') !!}
    <br/>
     <select name="ideditora" class="select form-control form-control-lg">
       @foreach ($editoras as $editora)
           <option value="{{$editora->id}}">{{$editora->id}} - {{$editora->nome}}</option>

       @endforeach
    </select>
</div>

<!-- Ano Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::text('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.livros.index') !!}" class="btn btn-default">Cancelar</a>
</div>
