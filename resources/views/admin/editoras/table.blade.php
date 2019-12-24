<table class="table table-bordered table-hover" id="editoras-table">
    <thead class="thead-light">
     <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ação</th>
     </tr>
    </thead>
    <tbody>
    @foreach($editoras as $editora)
        <tr>
            <td>{!! $editora->id !!}</td>
            <td>{!! $editora->nome !!}</td>
            <td>
                 <a href="{{ route('admin.editoras.show', $editora->id) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view editora"></i>
                 </a>
                 <a href="{{ route('admin.editoras.edit', $editora->id) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit editora"></i>
                 </a>
              <!--   <a href="{{ route('admin.editoras.confirm-delete', $editora->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete editora"></i>
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
