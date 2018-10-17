<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>J&C PROGRAMMING</title>
  <!-- Tell the browser to be responsive to screen width -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom-themes.css')}}">
    <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />
    @section('link')
</head>

<body>

</a>
    <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="toggle-sidebar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="sidebar-brand">
                    <a href="#">Menú principal</a>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>{{ Auth::user()->name }}</strong>


                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fas fa-circle"></i>
                            <span>Linea</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar">
                            <a href="{{url('/home')}}">
                                <i class="fas fa-home"></i>
                                <span>Inicio</span>

                            </a>

                        </li>

                <li class="sidebar-dropdown">
                            <a href="#">
                           <i class="fas fa-unlock-alt"></i>
                                <span>Administración</span>
                                     <span class="pull-right-container">
                                       <i class="fas fa-angle-down pull-right"></i>
                                     </span>
                            </a>

                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('users.index')}}"><i class="fas fa-user"></i> <span>Usuarios</span></a>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('roles.index')}}"><i class="fas fa-user-tie"></i> <span>Roles</a></span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('permissions.index')}}"><i class="fas fa-user-tag"></i> <span>Permisos</a></a>
                                    </li>
                                </ul>
                            </div>

                 </li>


                   <li class="sidebar-dropdown">
                            <a href="#">
                              <i class="fas fa-store"></i>

                                <span>Tienda</span>
                                     <span class="pull-right-container">
                                       <i class="fas fa-angle-down pull-right"></i>
                                     </span>
                            </a>

                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('products.index')}}"><i class="fas fa-car-battery"></i>Products

                                        </a>
                                    </li>
                                    <li>

                                        <a href="#"><i class="fa fa-shopping-cart"></i>Ordenes
                                        </a>

                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>

                    </li>
                             <li class="active"><a href="{{route('sales.index')}}"> <i class="fas fa-tags"></i> <span>Ventas</span></a></li>
                              <li class="active"><a href="{{route('purchases.index')}}"><i class="fas fa-cart-plus"></i> <span>Compras</span></a></li>
                              <li class="active"><a href="{{route('clients.index')}}"> <i class="fas fa-users"></i> <span>Clientes</span></a></li>
                              <li class="active"><a href="{{route('warranties.index')}}"><i class="fas fa-handshake"></i> <span>Garantías</span></a></li>




                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="label label-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="label label-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a  data-toggle="modal" data-target="#myModal"> <i class="fas fa-power-off"></i></a>

            </div>


        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">


                @yield('content')

                 @include('frond.models.model')


                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    @section('script')
    <!-- page-wrapper -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/jsjquery1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('assets/jsjs/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/document.js') }}"></script>




</body>

</html>
