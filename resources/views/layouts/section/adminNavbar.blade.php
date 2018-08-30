<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MAIIP <i class="fa fa-leaf"></i> Administración</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-right top-nav">     

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/"><i class="fa fa-user fa-fw"></i> Principal</a>
                    </li>
                    
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-fw"></i>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <br>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <br>
                    <li>
                        <a href="{{ url('/admin') }}"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/departamento') }}"><i class="fa fa-dashboard fa-fw"></i> Departamento</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/municipio') }}"><i class="fa fa-dashboard fa-fw"></i> Municipio</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/generalidadesterritorio') }}"><i class="fa fa-thermometer-three-quarters fa-fw"></i> Generalidades y territorio</a>
                    </li> 
                    <li>
                        <a href="{{ url('/admin/demografia') }}"><i class="fa fa-edit fa-fw"></i> Demografías</a>
                    </li> 
                    <li>
                        <a href="{{ url('/admin/viviendaserviciospublicos') }}"><i class="fa fa-home fa-fw"></i> Vivienda y Servicios Públicos</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/salud') }}"><i class="fa fa-plus fa-fw"></i> Salud</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/educacion') }}"><i class="fa fa-book fa-fw"></i> Educación</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/seguridadviolencia') }}"><i class="fa fa-unlock-alt fa-fw"></i> Seguridad y Violencia</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/economicosocial') }}"><i class="fa fa-users fa-fw"></i> Económico-Social</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/finanza') }}"><i class="fa fa-usd fa-fw"></i> Finanzas</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
</div>