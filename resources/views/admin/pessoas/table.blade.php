<table class="table table-bordered table-hover" id="pessoas-table">
    <thead class="thead-light">
     <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Id de Membro</th>
        <th>Data de Afiliacao</th>
        <th>Ação</th>
     </tr>
    </thead>
    <tbody>
    @foreach($pessoas as $pessoa)
        <tr>
            <td>{!! $pessoa->id !!}</td>
            <td>{!! $pessoa->nome !!}</td>
            <td>{!! $pessoa->cpf !!}</td>
            <td>{!! $pessoa->idmembro !!}</td>
            <td>{!! $pessoa->dataafiliacao !!}</td>
            <td>
                 <a href="{{ route('admin.pessoas.show', $pessoa->id) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view pessoa"></i>
                 </a>
                 <a href="{{ route('admin.pessoas.edit', $pessoa->id) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit pessoa"></i>
                 </a>
                 <a href="{{ route('admin.pessoas.confirm-delete', $pessoa->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete pessoa"></i>
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
