<table class="table table-bordered table-hover" id="autors-table">
    <thead class="thead-light">
     <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Ação</th>
     </tr>
    </thead>
    <tbody>
    @foreach($autors as $autor)
        <tr>
            <td>{!! $autor->id !!}</td>
            <td>{!! $autor->nome !!}</td>
            <td>
                 <a href="{{ route('admin.autors.show', $autor->id) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view autor"></i>
                 </a>
                 <a href="{{ route('admin.autors.edit', $autor->id) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit autor"></i>
                 </a>
                <!-- <a href="{{ route('admin.autors.confirm-delete', $autor->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete autor"></i>
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
