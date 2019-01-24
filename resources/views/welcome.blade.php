<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <link href="../assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
            <link href="../assets/img/favicon.png" rel="icon" type="image/png">
                <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
                <title>
                    Sistema de venta online.
                </title>
                <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>
                <!--     Fonts and icons     -->
                <link href="{{asset('assets/css/fontawesome/css/all.min.css')}}" rel="stylesheet">
                    <link href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}" rel="stylesheet">
                        <!-- CSS Files -->
                        <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>
                        <!-- CSS Just for demo purpose, don't include it in your project -->
                        <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet"/>
                    </link>
                </link>
            </link>
        </link>
    </head>
    <body class="landing-page sidebar-collapse">
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fa fa-bars">
                        </i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="index3.html">
                        Home
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="#">
                        Contact
                    </a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input aria-label="Search" class="form-control form-control-navbar" placeholder="Search" type="search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fa fa-search">
                                </i>
                            </button>
                        </div>
                    </input>
                </div>
            </form>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a class="btn btn-default btn-flat dropdown-item text-center" href="http://proyectou.test:8080/logout" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            <i aria-hidden="true" class="fa fa-power-off">
                            </i>
                        </a>
                        <form action="http://proyectou.test:8080/logout" id="logout-form" method="POST" style="display: none;">
                            <input name="_token" type="hidden" value="tnF6Otcubcispa9QNvx7OhPrdwnKjEGRMJuIeE6C">
                            </input>
                        </form>
                        <div class="dropdown-divider">
                        </div>
                    </div>
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-cog">
                        </i>
                    </a>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-slide="true" data-widget="control-sidebar" href="#">
                        <i class="fa fa-th-large">
                        </i>
                    </a>
                </li>
            </ul>
        </nav>
        <!--<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
          <a>Material Kit </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
                       <!-- Authentication Links 
                        @guest
                            <li><a  style="color: darkgray" class="nav-link"  href="{{route('login')}}"><strong><u>Login</u></strong></a></li>
                            <li><a   style="color: darkgray" class="nav-link" href="{{route('register')}}"><strong><u>Registro</u></strong></a>
                        @else

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                 <div class="dropdown-menu dropdown-with-icons">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                 </div>
                                </ul>
                            </li>
                        @endguest



                    </ul>

      </div>
    </div>
  </nav>-->
        <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">
                            Your Story Starts With Us.
                        </h1>
                        <h4>
                            Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.
                        </h4>
                        <br>
                            <a class="btn btn-danger btn-raised btn-lg" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">
                                <i class="fa fa-play">
                                </i>
                                Watch video
                            </a>
                        </br>
                    </div>
                </div>
            </div>
        </div>
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">
                                Let&apos;s talk product
                            </h2>
                            <h5 class="description">
                                This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more.
                            </h5>
                        </div>
                    </div>
                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="material-icons">
                                            chat
                                        </i>
                                    </div>
                                    <h4 class="info-title">
                                        Free Chat
                                    </h4>
                                    <p>
                                        Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">
                                            verified_user
                                        </i>
                                    </div>
                                    <h4 class="info-title">
                                        Verified Users
                                    </h4>
                                    <p>
                                        Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">
                                            fingerprint
                                        </i>
                                    </div>
                                    <h4 class="info-title">
                                        Fingerprint
                                    </h4>
                                    <p>
                                        Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section text-center">
                    <h2 class="title">
                        Here is our team
                    </h2>
                    <div class="team">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-player">
                                    <div class="card card-plain">
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="../assets/img/faces/avatar.jpg">
                                            </img>
                                        </div>
                                        <h4 class="card-title">
                                            Gigi Hadid
                                            <br>
                                                <small class="card-description text-muted">
                                                    Model
                                                </small>
                                            </br>
                                        </h4>
                                        <div class="card-body">
                                            <p class="card-description">
                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                                <a href="#">
                                                    links
                                                </a>
                                                for people to be able to follow them outside the site.
                                            </p>
                                        </div>
                                        <div class="card-footer justify-content-center">
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-twitter">
                                                </i>
                                            </a>
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-instagram">
                                                </i>
                                            </a>
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-facebook-square">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <div class="card card-plain">
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="../assets/img/faces/christian.jpg">
                                            </img>
                                        </div>
                                        <h4 class="card-title">
                                            Christian Louboutin
                                            <br>
                                                <small class="card-description text-muted">
                                                    Designer
                                                </small>
                                            </br>
                                        </h4>
                                        <div class="card-body">
                                            <p class="card-description">
                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                                <a href="#">
                                                    links
                                                </a>
                                                for people to be able to follow them outside the site.
                                            </p>
                                        </div>
                                        <div class="card-footer justify-content-center">
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-twitter">
                                                </i>
                                            </a>
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-linkedin">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <div class="card card-plain">
                                        <div class="col-md-6 ml-auto mr-auto">
                                            <img alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" src="../assets/img/faces/kendall.jpg">
                                            </img>
                                        </div>
                                        <h4 class="card-title">
                                            Kendall Jenner
                                            <br>
                                                <small class="card-description text-muted">
                                                    Model
                                                </small>
                                            </br>
                                        </h4>
                                        <div class="card-body">
                                            <p class="card-description">
                                                You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                                <a href="#">
                                                    links
                                                </a>
                                                for people to be able to follow them outside the site.
                                            </p>
                                        </div>
                                        <div class="card-footer justify-content-center">
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-twitter">
                                                </i>
                                            </a>
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-instagram">
                                                </i>
                                            </a>
                                            <a class="btn btn-link btn-just-icon" href="#pablo">
                                                <i class="fa fa-facebook-square">
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-contacts">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="text-center title">
                                Comentarios
                            </h2>
                            <h4 class="text-center description">
                                Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.
                            </h4>
                            @include('frond.commentaries.fragment.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    , made with
                    <i class="material-icons">
                        favorite
                    </i>
                    by
                    <a href="https://www.creative-tim.com" target="_blank">
                        Creative Tim
                    </a>
                    for a better web.
                </div>
            </div>
        </footer>
        <!--   Core JS Files   -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}">
        </script>
        <script src="{{asset('assets/js/plugins/jquery.sharrre.js')}}">
        </script>
        <script src="{{asset('assets/js/core/popper.min.js')}}">
        </script>
        <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}">
        </script>
        <script src="{{asset('assets/js/material-dashboard.min.js')}}">
        </script>
        <script src="{{asset('assets/js/plugins/moment.min.js')}}">
        </script>
        <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}" t="">
        </script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{asset('assets/js/plugins/nouislider.min.js')}}">
        </script>
        <script src="{{asset('js/sweetalert.min.js')}}">
        </script>
        <script src="{{asset('js/document.js')}}">
        </script>
        <!--  Plugin for Sharrre btn -->
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    </body>
</html>
