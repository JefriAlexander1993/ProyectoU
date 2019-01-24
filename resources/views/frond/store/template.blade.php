<!DOCTYPE html>
<html>
    <head>
        <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/css/fontawesome/css/all.min.css')}}" rel="stylesheet">
            <link href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
                <link href="{{asset('css/document.css')}}" rel="stylesheet">
                    <title>
                        @yield('title','programing C&J;')
                    </title>
                    <meta charset="utf-8">
                        <meta content="width=device-width, initial-scale=1" name="viewport">
                            <meta content="ie=edge" http-equiv="x-ua-compatible">
                                <meta content="{{ csrf_token() }}" name="csrf-token">
                                    <!-- Font Awesome Icons -->
                                    <!-- Theme style -->
                                    <link href="http://proyectou.test:8080/css/adminLte/adminlte.min.css" rel="stylesheet">
                                        <!-- Google Font: Source Sans Pro -->
                                        <link href="http://proyectou.test:8080/css/adminLte/fonts.css" rel="stylesheet">
                                            <link href="http://proyectou.test:8080/assets/css/fontawesome/css/all.min.css" rel="stylesheet">
                                                <link href="http://proyectou.test:8080/assets/css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </meta>
                            </meta>
                        </meta>
                    </meta>
                </link>
            </link>
        </link>
    </head>
</html>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('frond.pagePrincipal.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>
                                    DETALLE DEL PRODUCTO.
                                </strong>
                                <a class="btn btn-default pull-right" href="{{ url('/catalogo')}}" title="Listado de todos los productos.">
                                    <i class="fa fa-list-ol">
                                    </i>
                                </a>
                            </div>
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
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
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="http://proyectou.test:8080/js/adminLte/jquery.min.js">
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://proyectou.test:8080/js/adminLte/bootstrap.bundle.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="http://proyectou.test:8080/js/adminLte/adminlte.min.js">
    </script>
    <script src="http://proyectou.test:8080/js/app.js">
    </script>
</body>
