<table class="table table-bordered table-hover" id="livros-table">
    <thead class="thead-light">
     <tr>
        <th>Código</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Codigobarras</th>
        <th>Isbn</th>
        <th>Ideditora</th>
        <th>Ano</th>
        <th>Ação</th>
     </tr>
    </thead>
    <tbody>
    @foreach($livros as $livro)
        <tr>
            <td>{!! $livro->id !!}</td>
            <td>{!! $livro->titulo !!}</td>
            <td>{!! $livro->autor ? $livro->autor->nome : '--'  !!}</td>
            <td>{!! $livro->codigobarras !!}</td>
            <td>{!! $livro->isbn !!}</td>
            <td>{!! $livro->editora? $livro->editora->nome : '--' !!}</td>
            <td>{!! $livro->ano !!}</td>
            <td>
                 <a href="{{ route('admin.livros.show', $livro->id) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view livro"></i>
                 </a>
                 <a href="{{ route('admin.livros.edit', $livro->id) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit livro"></i>
                 </a>
                 <a href="{{ route('admin.livros.confirm-delete', $livro->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete livro"></i>
                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@section('footer_scripts')
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
