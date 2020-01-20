@extends('admin/layouts/default')

@section('title')
Emprestimo
@parent
@stop

@section('content')
@include('common.errors')
<section class="content-header">
    <h1>Emprestimo</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Emprestimos</li>
        <li class="active">Novo Empréstimo de Livro</li>
    </ol>
</section>
<section class="content">
<div class="container">
<div class="row">
    <div class="col-12">
     <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Novo Emprestimo
                </h4></div>
            <br />
            <div class="card-body">
            {!! Form::open(['route' => 'admin.emprestimos.store']) !!}

            <!-- Iduser Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('iduser', 'Usuário Responsável:') !!}
                <input class="form-control" type="text" disabled value="{{$usuario->first_name}} {{$usuario->last_name}}"/>
            </div>

            <!-- Idlivro Field -->
            <div class="form-group col-sm-12 buscaLivro">
                {!! Form::label('idlivro', 'Livro:') !!}
                <input type="text" class="form-control " id="buscaTextoLivro" name="buscaTextoLivro" required placeholder="Insira algo para buscar" onkeyup="$(window).on('load', locLivro(this.value.toString()))" />

            </div>


            <div class="">
                        <span id="sss" style="background-color:#ccc;"></span>
            </div>


            <script type="text/javascript">


                        let a = @json($livros);

                        console.log(Object.values(a));

                        function locLivro(livro) {
                           var i;
                           var bb;
                           var cc = "<table class='table table-striped'>";
                           var busca;
                           var buscaTitulo;
                           var buscaCodigo;
                           var teste;


                           for (i=0;i<a.length;i++) {
                               // bb = console.log(a[i].toLowerCase());
                             bb = a[i];
                             bb.titulo = bb.titulo.toLowerCase();
                             bb.id = bb.id.toString();


                              buscaTitulo = bb.titulo.indexOf(livro.toLowerCase());
                              if (livro != "") {
                                if (buscaTitulo >= 0) {


                              //    teste=bb.titulo;
                                  cc += "<tr style='text-transform:capitalize;'> <td><b>Código: </b>" + bb.id + "</td><td><b>Titulo: </b>" + bb.titulo + "<td><b>Edição:</b> " + bb.edicao + "</td><td><b>Ano: </b> "
                                      + bb.ano + "</td><td><a href='#' id='selecionaTitulo' name='selecionaTitulo'
                                      class='selecionaTitulo btn btn-sm btn-primary'
                                      onClick='(window).on('click', adiciona(bb.id))'
                                       ><span class='fa fa-plus'></span> Selecionar</a></td></tr>";
                               }
                             }


                               buscaId = bb.id.indexOf(livro);
                               if (livro != "") {
                                 if (buscaId >= 0) {
                                   cc += "<tr style='text-transform:capitalize;'> <td><b>Código: </b>" + bb.id + "</td><td><b>Titulo: </b>" + bb.titulo + "<td><b>Edição:</b> " + bb.edicao + "</td><td><b>Ano: </b> "
                                       + bb.ano + "</td><td><a href='#' id='selecionaId' class='btn btn-sm btn-primary'><span class='fa fa-plus'></span> Selecionar</a></td></tr>";
                                }
                              }

                           }
                           cc += "</table>";
                           document.getElementById("sss").innerHTML = cc;





                        }
                        function  adiciona(teste){
                        //   alert("teste");
                        //   document.getElementById("CodigoLivro").value = titulo;
                      //     ("#CodigoLivro").value = bb.titulo;
                           document.getElementById("CodigoLivro").value = teste;
                           }
              //        ("#selecionaTitulo").click(adiciona());


                    </script>



                    <div class="form-group  col-sm-3 ">
                          {!! Form::label('idlivro', 'Codigo do Livro:') !!}
                          <input type="text" class="form-control " id="CodigoLivro" name="CodigoLivro"disabled  />
                    </div>
                    <div class="form-group  col-sm-3">
                          {!! Form::label('datacriacao', 'Data do Emprestimo:') !!}
                          {!! Form::text('datacriacao', null, ['class' => 'form-control']) !!}
                    </div>



            <!-- Datadevolucao Field -->


            <!-- Submit Field -->
            <div class="form-group col-sm-12 text-center">
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
                <a href="{!! route('admin.emprestimos.index') !!}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}
        </div>
      </div>
      </div>
 </div>

</div>
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
@stop
