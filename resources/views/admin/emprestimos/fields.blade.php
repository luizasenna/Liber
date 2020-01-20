<!-- Iduser Field -->
<div class="form-group col-sm-12">
    {!! Form::label('iduser', 'Usuário Responsável:') !!}
    <input class="form-control" type="text" disabled value="{{$usuario->first_name}} {{$usuario->last_name}}"/>
</div>

<!-- Idlivro Field -->
<div class="form-group  buscaLivro">
    {!! Form::label('idlivro', 'Livro:') !!}
    <input type="text" class="form-control col-sm-9" id="buscaTextoLivro" placeholder="Insira algo para buscar" onkeyup="locLivro(this.value)" />
    {!! Form::label('idlivro', 'Codigo:') !!}
    <input type="text" class="form-control col-sm-3" disabled  />
</div>
<div class="form-group col-sm-3 ">
    {!! Form::label('idlivro', 'Codigo:') !!}
    <input type="text" class="form-control" disabled  />
</div>

<div class="">
            <span id="sss" style="background-color:#ccc;"></span>
</div>
<script type="text/javascript">

            //alert("teste2");
            var a = <?=$livros?>;

            function locLivro(livro) {
               var i;
               var bb;
               var cc = "<table class='table table-striped'>";
               var busca;
               var buscaTitulo;
               var buscaCodigo;

               for (i=0;i<a.length;i++) {
                   // bb = console.log(a[i].toLowerCase());
                 bb = a[i];
                   //alert("teste2");
                 busca = bb.id.indexOf(livro.toLowerCase());
                 if (livro != "") {
                   if (busca >= 0) {
                     cc += "<tr style='text-transform:capitalize;'> <td><b>Código: </b>" + bb.id + "</td><td><b>Titulo: </b>" + bb.titulo + "<td><b>Edição:</b> " + bb.edicao + "</td><td><b>Ano: </b> "
                         + bb.ano + "</td></tr>";
                   }
                 }
                  buscaTitulo = bb.titulo.indexOf(livro.toLowerCase());
                  if (livro != "") {
                    if (buscaTitulo >= 0) {
                      cc += "<tr style='text-transform:capitalize;'> <td><b>Código: </b>" + bb.id + "</td><td><b>Titulo: </b>" + bb.titulo + "<td><b>Edição:</b> " + bb.edicao + "</td><td><b>Ano: </b> "
                          + bb.ano + "</td></tr>";
                   }
                 }

               }
               cc += "</table>";
               document.getElementById("sss").innerHTML = cc;
            }


        </script>


<!-- Datacriacao Field -->
<div class="form-group col-sm-12">
    {!! Form::label('datacriacao', 'Data do Emprestimo:') !!}
    {!! Form::text('datacriacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Datadevolucao Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.emprestimos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
