<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta content="ie=edge" http-equiv="x-ua-compatible">
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <title>
                            AdminLTE 3 | Starter
                        </title>
                        <!-- Font Awesome Icons -->
                        <!-- Theme style -->
                        <link href="{{asset('css/adminLte/adminlte.min.css')}}" rel="stylesheet">
                            <!-- Google Font: Source Sans Pro -->
                            <link href="{{asset('css/adminLte/fonts.css')}}" rel="stylesheet">
                                <link href="{{asset('assets/css/fontawesome/css/all.min.css')}}" rel="stylesheet">
                                    <link href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
                                        <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
                                            <link href="{{asset('css/select/css/bootstrap-select.min.css')}}" rel="stylesheet">
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper" style="background-color:#38338A">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand border-bottom" style="background-color:#38338A">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" style="color:#fff">
                            <i class="fa fa-bars">
                            </i>
                        </a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a class="btn btn-default btn-flat dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i aria-hidden="true" class="fa fa-power-off">
                                </i>
                            </a>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;color:#fff">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
                <a class="nav-link" data-toggle="dropdown" href="#" style="color:#fff">
                    <i class="fas fa-cog">
                    </i>
                </a>
            </nav>
        </div>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark elevation-4">
            <!-- Brand Logo -->
            <a class="brand-link" href="{{url('/')}}" style="color: #fff">
                <img alt="AdminLTE Logo" class="brand-image img-circle elevation-3" src="{{asset('img/AdminLTELogo.png')}}" style="opacity: .8">
                    <span class="brand-text font-weight-light">
                        <b>
                            J & C PROGRAMMING
                        </b>
                    </span>
                </img>
            </a>
            <!-- Sidebar -->
            <div class="sidebar" style="background-color: #fff">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img alt="User Image" class="img-circle elevation-2" src="{{ Auth::user()->file }}">
                        </img>
                    </div>
                    <div class="info">
                        <br>
                            <strong>
                                {{ Auth::user()->name .''. Auth::user()->last_name }}
                            </strong>
                        </br>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview ">
                            <a class="nav-link active" href="#">
                                <i class="nav-icon fa fa-dashboard">
                                </i>
                                <p>
                                    Administración
                                    <i class="right fa fa-angle-left">
                                    </i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('users.index')}}">
                                        <i class="fa fa-circle-o nav-icon">
                                        </i>
                                        <p>
                                            Usuarios
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('roles.index')}}">
                                        <i class="fa fa-circle-o nav-icon">
                                        </i>
                                        <p>
                                            Roles
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('permissions.index')}}">
                                        <i class="fa fa-circle-o nav-icon">
                                        </i>
                                        <p>
                                            Permisos
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('permissions_roles.index')}}">
                                        <i class="fa fa-circle-o nav-icon">
                                        </i>
                                        <p>
                                            Permisos asignados a roles
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('users_roles.index')}}">
                                        <i class="fa fa-circle-o nav-icon">
                                        </i>
                                        <p>
                                            Roles asignados a usuarios
                                        </p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('categories.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Categorias
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Productos
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('purchases.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Compras
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('sales.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Ventas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('clients.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Clientes
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('commentaries.index')}}">
                                    <i class="fa fa-circle-o nav-icon">
                                    </i>
                                    <p>
                                        Comentarios
                                    </p>
                                </a>
                            </li>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->
            <br>
                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Home
                                        </h3>
                                        <div class="card-tools">
                                            <button class="btn btn-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
                                                <i class="fa fa-minus">
                                                </i>
                                            </button>
                                            <button class="btn btn-tool" data-toggle="tooltip" data-widget="remove" title="Remove" type="button">
                                                <i class="fa fa-times">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body" style="display: block;">
                                        @include('frond.fragment.info')
          @include('frond.fragment.error')
             @yield('content')
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer" style="display: block;">
                                        @yield('contentPaginate')
                                    </div>
                                    <!-- /.card-footer-->
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
            </br>
        </div>
        <!-- /.content -->
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>
                    Title
                </h5>
                <p>
                    Sidebar content
                </p>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>
                Copyright © 2014-2018
                <a href="https://adminlte.io">
                    AdminLTE.io
                </a>
                .
            </strong>
            All rights reserved.
        </footer>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{asset('js/adminLte/jquery.min.js')}}">
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('js/adminLte/bootstrap.bundle.min.js')}}">
        </script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/adminLte/adminlte.min.js')}}">
        </script>
        <script src="{{asset('js/jquery.dataTables.min.js') }}">
        </script>
        <script src="{{asset('js/dataTables.bootstrap4.min.js') }}">
        </script>
        <script src="{{asset('js/document.js')}}">
        </script>
        <script src="{{asset('js/datatable.js') }}">
        </script>
        <script src="{{asset('js/sweetalert.min.js')}}">
        </script>
    </body>
</html>
