<li  ><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</span></a></li>
<li class="{{ Request::is('personalInfoAlumnos*') ? 'active' : '' }}"><a href="{!! route('personalInfoAlumnos.index') !!}"><i class="ft-user"></i> Students</span></a></li>
<li  style="" class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="nav.templates.main">Catalogs</span></a>
  <ul class="menu-content" style="">
    <li class=" nav-item {{ Request::is('catalogos*') ? 'active' : '' }}"><a href="{!! route('catalogos.index') !!}"><span class="menu-title" data-i18n="">Catalogs</span></a></li>
    <!--<li class=" nav-item {{ Request::is('materias*') ? 'active' : '' }}"><a href="{!! route('materias.index') !!}"><span class="menu-title" data-i18n="">subjects</span></a></li>                                --->
 </ul>
</li>
<li class="{{ Request::is('reportes*') ? 'active' : '' }}"><a href="{!! route('reportes.index') !!}"><i class="ft-file"></i>Reports</span></a></li>



