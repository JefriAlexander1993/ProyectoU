<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta content="ie=edge" http-equiv="x-ua-compatible">
                    <title>
                        AdminLTE 3 | Starter
                    </title>
                    <!-- Font Awesome Icons -->
                    <!-- Theme style -->
                    <link href="{{ asset('css/adminLte/adminlte.min.css')}}" rel="stylesheet">
                        <!-- Google Font: Source Sans Pro -->
                        <link href="{{ asset('css/adminLte/fonts.css')}}" rel="stylesheet">
                            <link href="{{ asset('css/fontawesome/css/all.min.css')}}" rel="stylesheet">
                                <link href="{{ asset('css/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
                                    <meta content="{{ csrf_token() }}" name="csrf-token">
                                    </meta>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('frond.store.partials.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark elevation-4" style="background-color:#38338A">
                <!-- Brand Logo -->
                <a class="brand-link" href="{{ url('/')}}" style="color:#fff">
                    <img alt="AdminLTE Logo" class="brand-image img-circle elevation-2" src="{{asset('img/AdminLTELogo.png')}}" style="opacity: .8">
                        <span class="brand-text font-weight-light">
                            <b>
                                J y C PROGRAMMING
                            </b>
                        </span>
                    </img>
                </a>
                <!-- Sidebar -->
                <div class="sidebar" style="width:100%;height:100%  ">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img alt="User Image" class="img-circle elevation-2" src="{{asset('img/user2-160x160.jpg')}}">
                            </img>
                        </div>
                        <div class="info">
                            <a class="d-block" href="#" style="color:#fff">
                                Administrador
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a class="nav-link active" href="#">
                                    <i class="fas fa-memory">
                                    </i>
                                    <p>
                                        Técnologia
                                        <i class="right fa fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                        <li class="nav-item has-treeview ">
                                            <a class="nav-link " href="#" style="color:#fff">
                                                <i class="nav-icon fa fa-dashboard">
                                                </i>
                                                <p>
                                                    Tv, Audio & Video
                                                    <i class="right fa fa-angle-left">
                                                    </i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link " href="#" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Tv
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="#" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Conversores
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="#" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Decodificadores
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Audífonos
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Micrófonos
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Proyectores
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Parlantes
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Otros
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Electronica
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Armas Eléctricas
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Baterías
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Calculadoras
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Lamparas
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Drones
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Cargadores Portatiles
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Computación
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Memorias
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Coversores
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Tarjetas de sonido
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Celulares
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Celulares
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Mandos & Joysticks
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Cargadores
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Tripodes
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Camaras
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Acción cam
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Camras de seguridad
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Tripodes
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                        <li class="nav-item has-treeview menu-open">
                                            <a class="nav-link" href="" style="color:#fff">
                                                <i class="fa fa-circle-o nav-icon">
                                                </i>
                                                <p>
                                                    Tablet
                                                </p>
                                            </a>
                                        </li>
                                    </li>
                                    <!----------------------------------------------------------------------------------->
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a class="nav-link active" href="#" style="color:#fff">
                                    <i class="fas fa-medkit">
                                    </i>
                                    <p>
                                        Salud & Belleza
                                        <i class="right fa fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                        <li class="nav-item has-treeview ">
                                            <a class="nav-link " href="#" style="color:#fff">
                                                <i class="nav-icon fa fa-dashboard">
                                                </i>
                                                <p>
                                                    Salud
                                                    <i class="right fa fa-angle-left">
                                                    </i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link " href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Basculas personales
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Maquinas Masajeadoras
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Tensiometros
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Humidificadores
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Belleza
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Plancha & Cepillos
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Cuidado de la cara
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Secadores
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        >Fajas & Fitness
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!----------------------------------------------------------------------------------->
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a class="nav-link active" href="#" style="color:#fff">
                                    <i class="fas fa-tshirt">
                                    </i>
                                    <p>
                                        Moda & Accesorios
                                        <i class="right fa fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link " href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Relojes & Joyería
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link" href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Accesorios
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link" href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Ropa interior
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!----------------------------------------------------------------------------------->
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a class="nav-link active" href="#" style="color:#fff">
                                    <i class="fas fa-truck-monster">
                                    </i>
                                    <p>
                                        Juguetería
                                        <i class="right fa fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link " href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Peluches
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link" href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Muñecas
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link" href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Juegos de Mesa
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview menu-open">
                                        <a class="nav-link" href="" style="color:#fff">
                                            <i class="fa fa-circle-o nav-icon">
                                            </i>
                                            <p>
                                                Patines & Patinetas
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!----------------------------------------------------------------------------------->
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview ">
                                <a class="nav-link active" href="#" style="color:#fff">
                                    <i class="fas fa-home">
                                    </i>
                                    <p>
                                        Hogar & Cocina
                                        <i class="right fa fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                        <li class="nav-item has-treeview ">
                                            <a class="nav-link " href="#" style="color:#fff">
                                                <i class="nav-icon fa fa-dashboard">
                                                </i>
                                                <p>
                                                    Hogar
                                                    <i class="right fa fa-angle-left">
                                                    </i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link " href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Basculas personales
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Maquinas Masajeadoras
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Tensiometros
                                                        </p>
                                                    </a>
                                                </li>
                                                <li class="nav-item has-treeview menu-open">
                                                    <a class="nav-link" href="" style="color:#fff">
                                                        <i class="fa fa-circle-o nav-icon">
                                                        </i>
                                                        <p>
                                                            Humidificadores
                                                        </p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!----------------------------------------------------------------------------------->
                                    <li class="nav-item has-treeview ">
                                        <a class="nav-link " href="#" style="color:#fff">
                                            <i class="nav-icon fa fa-dashboard">
                                            </i>
                                            <p>
                                                Cocina
                                                <i class="right fa fa-angle-left">
                                                </i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link " href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Plancha & Cepillos
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Cuidado de la cara
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Secadores
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview menu-open">
                                                <a class="nav-link" href="" style="color:#fff">
                                                    <i class="fa fa-circle-o nav-icon">
                                                    </i>
                                                    <p>
                                                        Fajas & Fitness
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
        </div>
    </body>
</html>
<!-- /.sidebar-menu -->
<!-- /.sidebar -->
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
                                    Catalogo
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
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="row">
                                        @foreach($products as $product )
                                        <div class="col-sm-4">
                                            <div class="card text-center">
                                                <div class="card-header ">
                                                    <h4 class="card-title">
                                                        <strong>
                                                            {{$product->name}}
                                                        </strong>
                                                    </h4>
                                                </div>
                                                <div class="card-body">
                                                    <img alt="card image cap" class="card-img-top " src="{{$product->file}}" style="height:100px;width:100px ">
                                                        <p class="card-text">
                                                            {{$product->description}}
                                                        </p>
                                                        <h4>
                                                            {{number_format($product->sale_price,2)}}
                                                        </h4>
                                                        <a class="btn btn-sm btn-primary" href="{{ route('agregar-producto',$product->id)}}">
                                                            ¿Cotizar?
                                                        </a>
                                                        <a class="btn btn-sm btn-primary" href="{{ route('detalle-producto',$product->id)}}">
                                                            Ver mas
                                                            <a>
                                                            </a>
                                                        </a>
                                                    </img>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer" style="display: block;">
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
        <a href="ht tps://adminlte.io">
            AdminLTE.io
        </a>
        .
    </strong>
    All rights reserved.
</footer>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!--inicia modal -->
<div aria-hidden="true" aria-labelledby="modalInicioLabel" class="modal fade" id="modalInicio" role="dialog" style="margin-top:150px " tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <b>
                    <h5 class="modal-title " id="modalInicioLabel" style="color:black;font-weight: bold;">
                        Ofertas Exclusivas
                    </h5>
                </b>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <h4 class="col-form-label" for="recipient-name" id="nombreU" style="color: black">
                            Registra tu correo lectronico y recibe nuestras ofertas.
                        </h4>
                        <input class="form-control" id="recipient-name" placeholder="tu@correo.com" type="text">
                        </input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-warning" data-dismiss="modal" href="" id="false">
                    No, deseo promociones
                </a>
                <a class="btn btn-primary" href="">
                    Registrar
                </a>
            </div>
        </div>
    </div>
</div>
<!--fin modal -->
<script src="{{asset('js/adminLte/jquery.min.js')}}">
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/adminLte/bootstrap.bundle.min.js')}}">
</script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminLte/adminlte.min.js')}}">
</script>
