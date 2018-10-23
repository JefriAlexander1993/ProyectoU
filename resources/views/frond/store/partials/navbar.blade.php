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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url("/")}}">Catalogo</a>
        </li>
        <li class="nav-item">
         <a  class="nav-link" href="">Quines Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contactanos</a>
        </li>
        <li class="nav-item" >
              <a class="nav-link" href="{{route("login")}}" >Inicar sesion</a>
        </li>
        <li class="nav-item" >     
              <a class="nav-link" href="{{route("register")}}"  >Registrate</a>
         </li>
 
    </ul>
     
    </div>
  </div>
</nav>
