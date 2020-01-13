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
<li class="{{ Request::is('admin/editoras*') ? 'active' : '' }}">
    <a href="{!! route('admin.editoras.index') !!}">
    <i class="livicon" data-c="#418BCA" data-hc="#418BCA" data-name="gear" data-size="18"
               data-loop="true"></i>
               Editoras
    </a>
</li>

<li class="{{ Request::is('admin/pessoas*') ? 'active' : '' }}">
    <a href="{!! route('admin.pessoas.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="gear" data-size="18"
               data-loop="true"></i>
               Pessoas / Membros
    </a>
</li>

<li class="{{ Request::is('admin/tipos*') ? 'active' : '' }}">
    <a href="{!! route('admin.tipos.index') !!}">
    <i class="livicon" data-c="#418BCA" data-hc="#418BCA" data-name="thumbnails-big" data-size="18"
               data-loop="true"></i>
               Tipos de Livros
    </a>
</li>
