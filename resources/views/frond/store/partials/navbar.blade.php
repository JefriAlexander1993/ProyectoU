<nav class="navbar navbar-expand-lg navbar-dark " style="margin-bottom: 0px; ">
   <img src="../assets/img/gotica/icono.png" height="50px" width="50px">
  <a href="{{ url('/home') }}" class="nav-link " style="color:#fff">  <h4 style="margin-left:10px;margin-top:10px  ">Comercializadora Gotica</h4><span class="sr-only">(current)</span>  </a> 


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
          
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
        <li class="nav-item">
          <a class="nav-link" href="{{route('principal')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('catalogo')}}">Catalogo</a>
        </li>
        <li class="nav-item">
         <a  class="nav-link" href="">Quines Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contactanos</a>
        </li>

          <ul class="nav navbar-nav navbar-right">
            <li class="active">
     
            @if (Route::has('login'))
          
                    @auth
                        
                     
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
                    @else
                    <li class="nav-item">  <a href="{{ route('login') }}" class="nav-link ">Login<span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item">  <a href="{{ url('/register') }}" class="nav-link ">Registro<span class="sr-only">(current)</span></a></li> 
                    @endauth
        
            @endif

          </div>
    </ul>
     </div>
</nav>

