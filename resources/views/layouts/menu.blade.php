<li  ><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</span></a></li>
<li class="{{ Request::is('alumnos*') ? 'active' : '' }}"><a href="{!! route('alumnos.index') !!}"><i class="ft-user"></i> Alumnos</span></a></li>
<li  style="" class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="nav.templates.main">Catálogos</span></a>
  <ul class="menu-content" style="">
    <li class=" nav-item {{ Request::is('catalogos*') ? 'active' : '' }}"><a href="{!! route('catalogos.index') !!}"><span class="menu-title" data-i18n="">Catálogos</span></a></li>
    <li class=" nav-item {{ Request::is('materias*') ? 'active' : '' }}"><a href="{!! route('materias.index') !!}"><span class="menu-title" data-i18n="">Materias</span></a></li>                                
 </ul>
</li>
<li class="{{ Request::is('reportes*') ? 'active' : '' }}"><a href="{!! route('reportes.index') !!}"><i class="ft-file"></i>Reportes</span></a></li>

