<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>J&C PROGRAMMING</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="{{asset('css/AdminLTE.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/_all-skins.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('css/fontawesome/css/fontawesome.min.css')}}">

<link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> 


<link href="{{asset('css/app.css')}}" rel="stylesheet">

     @yield('style')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <!-- Main Header -->
  <header class="main-header" >
<!-- Logo -->
    <a href="{{asset('images/logo.png')}}" class="logo" data-toggle="push-menu">
    <span class="logo-mini"><i class="fab fa-wolf-pack-battalion"></i><b>C</b>AR</span> 
    <span class="logo-lg"><i class="fab fa-wolf-pack-battalion" ></i><b>Olper</b>CAR</span>
    </a>
<!------------------------------------------------MENÚ SALIDA------------------------------------------------>    
    <nav class="navbar navbar-static-top" role="navigation">

      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

       
        </ul>
      </div>
    </nav>
  </header>

<!------------------------------------------------FIN DE MENÚ DE SALIDA------------------------------------------->


 <!------------------------------------------------MENÚ PRINCIPAL------------------------------------------>
 


 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">

           <p>{{ Auth::user()->name }}</p>
            <!-- Status -->
            <i class="fas fa-circle text-success"></i> Linea

        </div>
      </div>

      <!-- Sidebar Menu -->

      <ul class="sidebar-menu" data-widget="tree">

            <li class="active"><a href="{{route('home')}}"><i class="fas fa-desktop"></i><span> Escritorio</span></a></li> 
           
            <li class="treeview">
              @role('admin')
                   <a href="#"><i class="fas fa-unlock-alt"></i> <span>Administración</span>
                       <span class="pull-right-container">
                              <i class="fas fa-angle-left pull-right"></i>
                       </span>
                   </a>
                    <ul class="treeview-menu">
                            <li><a href="{{route('users.index')}}"><i class="fas fa-user"></i> <span>Usuarios</span></a></li>
                            <li><a href="{{route('roles.index')}}"><i class="fas fa-user-tie"></i> <span>Roles</a></span></li>
                            <li><a href="{{route('permissions.index')}}"><i class="fas fa-user-tag"></i> <span>Permisos</a></span></li>
                   </ul>         
               @endrole   
                   <li class="treeview">
                         <a href="#"> <i class="fas fa-cog"></i><span> Configuración</span>
                             <span class="pull-right-container">
                                     <i class="fas fa-angle-left pull-right"></i>
                             </span>
                         </a>
                  <ul class="treeview-menu">
                              <li class="active"><a  data-toggle="modal" data-target="#myModal"><i class="fas fa-user-circle"></i> Perfil</a>
                              <li class="active"><a  data-toggle="modal" data-target="#myModal"><i class="fas fa-question"></i> Ayuda</a> 
                  </ul>
            </li>  
                


            </li>

            <li class="active"><a href="{{route('sales.index')}}"> <i class="fas fa-tags"></i> <span>Ventas</span></a></li>
            <li class="active"><a href="{{route('purchases.index')}}"><i class="fas fa-cart-plus"></i> <span>Compras</span></a></li>
            <li class="active"><a href="{{route('products.index')}}"><i class="fas fa-car-battery"></i> <span>Productos</span></a></li>
            <li class="active"><a href="{{route('lots.index')}}"><i class="fas fa-box-open"></i> <span>Lotes</span></a></li>
            <li class="active"><a href="{{route('clients.index')}}"> <i class="fas fa-users"></i> <span>Clientes</span></a></li>
            <li class="active"><a href="{{route('raw_materials.index')}}"><i class="fas fa-dolly"></i> <span>Materias primas</span></a></li>
            <li class="active"><a href="{{route('credits.index')}}"><i class="fas fa-credit-card"></i> <span>Creditos</span></a></li>
            <li class="active"><a href="{{route('spendings.index')}}"> <i class="fas fa-money-bill-alt"></i> <span>Gastos</span></a></li>
            <li class="active"><a href="{{route('warranties.index')}}"><i class="fas fa-handshake"></i> <span>Garantías</span></a></li>
            <li class="active"><a  data-toggle="modal" data-target="#myModal"> <i class="fas fa-power-off"></i><span> Cerrar sesión</span> </a></li>

        
      </ul>

    </section>
  </aside>

  <!------------------------------------------------FIN DEL MENÚ------------------------------------------->

 
<!------------------------------------------------CONTENIDO------------------------------------------->

 <div class="content-wrapper">

    <section class="content container-fluid">
    <br>
 
    @yield('content')
    @include('frond.models.model')


    </section>

  </div>
<!------------------------------------------------FIN CONTENIDO------------------------------------------->

 
<!------------------------------------------------PIE DE PAGINA------------------------------------------->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
         Diseñado por: Jefri Alexander Martínez Álvarez
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">J&C</a>.</strong> Programming
  </footer>


  <script src="{{ asset('js/app.js')}}"></script> 
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/datatable.js') }}"></script>
  <script src="{{ asset('js/document.js') }}"></script>




<!---------------------------------------------FIN DE PIE DE PAGINA---------------------------------------->
@yield('script')



</div>
</body>
</html>