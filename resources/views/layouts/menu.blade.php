 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        
       <li  style=""><a href="{{ url('/home') }}"><i class="la la-home"></i> Home</span></a></li>
        <li  style="" class=" nav-item"><a href="#"><i class="la la-files-o"></i><span class="menu-title" data-i18n="nav.templates.main">Catálogos</span></a>
          <ul class="menu-content" style="">
              	<li class="{{ Request::is('alumnos*') ? 'active' : '' }}">
                    <a href="{!! route('alumnos.index') !!}"><i class="la la-edit"></i><span><i class="ft-user"></i> Alumnos</span></a>
                </li>
                              
         </ul>
        </li>
      </ul>
    </div>






