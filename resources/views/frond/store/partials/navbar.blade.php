<nav class="navbar navbar-expand-lg navbar-dark ">
   <img src="../assets/img/gotica/icono.png" height="50px" width="50px">
  <h4 style="margin-left:10px;margin-top:10px  ">Comercializadora Gotica</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
          
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    
        <li class="nav-item">
          <a class="nav-link" href="{{url("/")}}">Catalogo</a>
        </li>
        <li class="nav-item">
         <a  class="nav-link" href="">Quines Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contactanos</a>
        </li>
        @if(!Auth::check())
        <li class="nav-item" >
              <a class="nav-link" href="{{route("login")}}" >Inicar sesion</a>
        </li>
        <li class="nav-item" >     
              <a class="nav-link" href="{{route("register")}}"  >Registrate</a>
         </li>
        @endif 
 @if (Auth::guest())
                      
  @else
  <li class="dropdown" style="margin-left:570px ">
    <a href="#" class="nav-link" style ="color:#fff;" class="dropdown-toggle" data-toggle="dropdown">
     {{ Auth::user()->name }}<b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
      <li class="divider"></li>
      <li>
         <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar sesión
         </a>
         <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
      </li>
    </ul>
  </li>
  @endif
 
    </ul>
     
    </div>
  </div>
</nav>
