<ul id="menu" class="page-sidebar-menu">

    <li {!! (Request::is('admin/generator_builder') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL('admin/generator_builder') }}">
            <i class="livicon" data-name="shield" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            CRUD Generator
        </a>
    </li>

    <li {!! (Request::is('admin/activity_log') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/activity_log') }}">
            <i class="livicon" data-name="eye-open" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Log de Atividades
        </a>
    </li>



    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>
