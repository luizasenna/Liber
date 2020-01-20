<table class="table table-bordered table-hover" id="emprestimos-table">
    <thead class="thead-light">
     <tr>
        <th>Código</th>
        <th>Livro</th>
        <th>Data de Retirada</th>
        <th>Data de Devolução</th>
        <th>Ação</th>
     </tr>
    </thead>
    <tbody>
    @foreach($emprestimos as $emprestimo)
        <tr>
            <td>{!! $emprestimo->id !!}</td>
            <td>{!! $emprestimo->iduser !!}</td>
            <td>{!! $emprestimo->idlivro !!}</td>
            <td>{!! $emprestimo->datacriacao !!}</td>
            <td>{!! $emprestimo->datadevolucao !!}</td>
            <td>
                 <a href="{{ route('admin.emprestimos.show', $emprestimo->id) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view emprestimo"></i>
                 </a>
                 <a href="{{ route('admin.emprestimos.edit', $emprestimo->id) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit emprestimo"></i>
                 </a>
                 <!--<a href="{{ route('admin.emprestimos.confirm-delete', $emprestimo->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete emprestimo"></i>
                 </a>-->
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
