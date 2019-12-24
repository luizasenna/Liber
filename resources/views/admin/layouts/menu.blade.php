<li class="{{ Request::is('admin/autors*') ? 'active' : '' }}">
    <a href="{!! route('admin.autors.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="gear" data-size="18"
               data-loop="true"></i>
               Autores
    </a>
</li>
<li class="{{ Request::is('admin/classificacao*') ? 'active' : '' }}">
    <a href="{!! route('admin.classificacao.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="gear" data-size="18"
               data-loop="true"></i>
               Classificacao
    </a>
</li>
