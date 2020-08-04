<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion Documental Clinica</title>

</head>

<body>

<div id="wrapper">

    <nav  class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

        <!-- Aqui el nav o cabezera -->

        <!-- Lado Izquierdo -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/home') }}">Gestion documental clinica</a>
        </div>
        <!-- Fin del Lado Izquierdo -->


        <!-- Lado Derecho -->
        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">


                <ul class="dropdown-menu dropdown-user">

                    <li><a href="{{ url('/login') }}">
                            <i class="fa fa-gear fa-fw"></i> Registrar</a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="{{ url('/login') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-fw"></i> Logout</a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </li>
        </ul>
        <!-- Fin Lado Derecho -->
        <!-- Aqui Finaliza el nav o cabezera -->


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                  </span>
                                    <input type="text" class="form-control" placeholder="Ingrese el CI">
                                </div>

                                <!--
                                <div class="input-group margin-bottom-sm">
                                  <span class="input-group-addon">
                                    <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                  </span>
                                  <input class="form-control" type="text" placeholder="CI de la Persona">
                                </div>
                                -->
                            </li>

                            <li>
                                <a href="{{ url('/Usuario/create') }}">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> Agregar Usuario</a>
                            </li>

                            <li>
                                <a href="{{ url('/persona') }}"><i class='fa fa-list-ol fa-fw'></i> Lista de Usuarios</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-child fa-fw"></i> Consulta<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <div class="input-group">
                                <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                                </span>
                                    <input type="text" class="form-control" placeholder="Ingrese nro de la consulta">
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('/bautismo/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Consulta</a>
                            </li>

                            <li>
                                <a href="{{ url('/bautismo')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Consultas</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Servicio medico<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <div class="input-group">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                  </span>
                                    <input type="text" class="form-control" placeholder="Ingrese nro del servicio medico">
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('/ministerio/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar Servicio Medico</a>
                            </li>

                            <li>
                                <a href="{{ url('/ministerio')}}"><i class='fa fa-list-ol fa-fw'></i> Lista de Servicios Medicos</a>
                            </li>
                        </ul>
                    </li>





                </ul>
            </div>
        </div>

    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>

</div>




</body>

</html>
