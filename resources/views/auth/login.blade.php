<html lang="es">

<head>
  <meta charset="utf-8"/>
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          J&C PROGRAMMING </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

    </div>
  </nav>
  <div class="page-header header-filter" style="background-color:#fff" >
    <div class="container" style="margin-top:150px">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">

          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
              </div>
              <p class="description text-center">Diligencialo</p>
              <div class="card-body">

                        <div class="row">
                                     <div class="col-sm-12">
                                         <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <i class="fas fa-user"></i>
                                                                </span>
                                                              </div>
                                                    <input id="email" type="email" class="form-control" title="Correo electronico" name="email" value="{{ old('email') }}" required autofocus placeholder="ejemplo@gmail.com">

                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif


                                        </div>
                                    </div>
                         </div>

                         <div class="row">
                                     <div class="col-sm-12">
                                         <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                        <i class="fas fa-key"></i>
                                                </span>
                                              </div>
                                             <input id="password"  type="password" class="form-control"  title ="Conraseña" name="password" required placeholder="*************">

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif

                                        </div>
                                    </div>
                        </div>
                              <div class="row">
                                     <div class="col-sm-12">
                                         <div class="form-group" style="margin-left:18px">
                                              <button type="submit" class="btn btn-primary submit-btn btn-block">Aceptar</button>
                                         </div>
                                             <div class="form-group d-flex justify-content-between">
                                                  <div class="form-check form-check-flat mt-0">
                                                       <label class="form-check-label">
                                                       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame.
                                                    </label>
                                                  </div>
                                                  <a href="#" class="text-small forgot-password text-black">Se te olvidó tu contraseña?</a>
                                             </div>
                                                    <div class="text-block text-center my-3">
                                                          <span class="text-small font-weight-semibold">No es un miembro ?</span>
                                                          <a href="{{ route('register') }}" class="text-black text-small">Crear una nueva cuenta.</a>
                                                    </div>
                                    </div>
                                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                J&C PROGRAMMING
              </a>
            </li>

          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script> <i class="material-icons"></i>
        </div>
      </div>
    </footer>

  <!--   Core JS Files   -->
  <script  type="text/javascript" src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascrip" ></script>
  <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}"  type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"  type="text/javascript"></script>
  <!--  Plugin for Sharrre btn -->
  <script src="{{asset('assets/js/plugins/jquery.sharrre.js')}}"  type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-kit.js?v=2.0.4')}}"   type="text/javascript"></script>
</body>

</html>
