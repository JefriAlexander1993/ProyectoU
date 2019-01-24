<!DOCTYPE doctype html>
<html lang="es">
    <head>
        <title>
            Sistema de venta online.
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3" name="description">
                        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                            <meta content="{{ csrf_token() }}" name="csrf-token">
                                <!--     Fonts and icons     -->
                                <!-- Material Kit CSS -->
                                <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
                                    <link href="{{asset('assets/css/fontawesome/css/all.min.css')}}" rel="stylesheet">
                                        <link href="{{asset('css/select/css/bootstrap-select.min.css')}}" rel="stylesheet">
                                        </link>
                                    </link>
                                </link>
                            </meta>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
</html>
<body class="dark-edition">
    <div class="wrapper ">
        <div class="row">
            <div class="col-lg-2">
                <div class="sidebar" data-background-color="black" data-color="purple" data-image="../assets/img/sidebar-2.jpg">
                    <div class="sidebar-wrapper">
                        <ul class="nav">
                            <li class="nav-item active ">
                                <a class="nav-link" href="{{url('/')}}">
                                    <i class="fas fa-home">
                                    </i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="collapse" href="#pageSubmenu">
                                    <i class="fas fa-unlock-alt">
                                    </i>
                                    <span>
                                        Administración
                                    </span>
                                </a>
                            </li>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a class="nav-link" href="{{route(" users.index")}}"="">
                                        <i class="fas fa-user">
                                        </i>
                                        <span>
                                            Usuarios
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route(" roles.index")}}"="">
                                        <i class="fas fa-user-tie">
                                        </i>
                                        <span>
                                            Roles
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route(" permissions.index")}}"="">
                                        <i class="fas fa-user-tag">
                                        </i>
                                        <span>
                                            Permisos
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route(" users_roles.index")}}"="">
                                        <i class="fas fa-address-book">
                                        </i>
                                        <span>
                                            Asignación de rol
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route(" role_permissions.index")}}"="">
                                        <i class="fas fa-address-card">
                                        </i>
                                        <span>
                                            Asignación de permiso
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route(" purchases.index")}}"="">
                                    <i class="fas fa-shopping-cart">
                                    </i>
                                    <p>
                                        Compras
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route(" sales.index")}}"="">
                                    <i class="fas fa-money-bill-alt">
                                    </i>
                                    <p>
                                        Ventas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route(" products.index")}}"="">
                                    <i class="fab fa-product-hunt">
                                    </i>
                                    <p>
                                        Productos
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a "="" class="nav-link" href="{{route('clients.index')}}">
                                    <i class="fas fa-users">
                                    </i>
                                    <p>
                                        Clientes
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('commentaries.index')}}">
                                    <i class="fa-comment-alt">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<p>
    Cometarios
</p>
<li class="nav-item ">
    <a class="nav-link" href="{{route(" quotations.index")}}"="">
        <i class="fas fa-clipboard-list">
        </i>
        <p>
            Cotización
        </p>
    </a>
</li>
<div class="col-lg-10" id="contenido">
    <div class="content" style="padding-right:10px;padding-left:10px ">
        @yield('content')
    </div>
</div>
<!-- End Navbar -->
<div class="fixed-plugin" style="margin-top:-7%;">
    <div class="dropdown show-dropdown" style="color:#000">
        <a data-toggle="dropdown" href="#">
            <i class="fa fa-cog fa-2x">
            </i>
        </a>
        <ul class="nav-item dropdown">
            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu dropdown-menu-right" style="background-color: transparent;color:#000">
                <a class="dropdown-item" href="javascript:void(0)">
                    Ayuda
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    <i aria-hidden="true" class="fa fa-power-off">
                    </i>
                    Cerrar
                </a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </ul>
    </div>
</div>
@yield('script')
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}">
</script>
<script src="{{asset('js/jquery.dataTables.min.js') }}">
</script>
<script src="{{asset('js/dataTables.bootstrap4.min.js') }}">
</script>
<script src="{{asset('js/select/js/bootstrap-select.min.js')}}">
</script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/demo/demo.js')}}">
</script>
<script src="{{asset('js/document.js')}}">
</script>
<script src="{{asset('js/datatable.js') }}">
</script>
<script src="{{asset('js/sweetalert.min.js')}}">
</script>
