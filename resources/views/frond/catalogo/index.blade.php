<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="assets/img/gotica/icono.png" height="50px" width="50px">
  <h1>Comercializadora Gotica</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalogo">Catalogo</a>
      </li>
      <li class="nav-item">
       <a  class="nav-link" href="">Quines Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Contactanos</a>
      </li>
    </ul>
    <!--form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form-->
    
    	
  
    <a class="nav-link" href="">inicar sesion</a>
   	<a class="nav-link" href="">registrate</a>
   
    	
    
  </div>
</nav>



<section class="catalogo-container">
<div class="container">
	<div class="row">
		<div class="col-md-3">
<h2>Categorias</h2>			
	<!--ul class="list-group">
	
  <li class="list-group-item">Tecnologia</li>
  <li class="list-group-item">Ropa</li>
  <li class="list-group-item">Accesorios</li>
  
</ul-->

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Tecnologia
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <a href="" class="list-group-item">
        Computadores
      </a>
       <a  href="" class="list-group-item">
        Celulares
      </a>
       <a href="" class="list-group-item">
        Impresoras
      </a>

    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Accesorios
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <li class="card-body">
      	mouse
        </li>
        <li class="card-body">
      	mouse
        </li>
        <li class="card-body">
      	mouse
        </li>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Ropa
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <a class="list-group-item"  href="">accesorios</a>
      <a  class="list-group-item"  href="">mouse</a>
    </div>
  </div>
</div>

		</div>
		

<!--lista de productos -->


<div class="col-md-9">
	<div class="row">

		@foreach($productoslist as $productos ) 
	<div class="col-md-4">
    <div class="card text-center" style="width: 18rem;">

  <img class="card-img-top " src="{{$productos->imagen}}" alt="Card image cap">

  <div class="card-body">
  	<h1 class="card-title"> {{$productos->id}}</h1>
    <h5 class="card-title">{{$productos->nombre}}</h5>
    <p class="card-text">{{$productos->descripcion}}</p>
    <h1>{{number_format($productos->precio,2)}}</h1>
    <a href="{{route('agregar-producto',$productos->id)}}  class="btn btn-primary">¿cotizar?</a>
    <a href="{{route('detalle-producto',$productos->id)}}"> ver mas <a/>
    	
  </div>
  
</div>
</div>


@endforeach
		
	</div>


</div>

</div>	

</div>



</section>



<script src="plugins/jquery/js/jquery-3.3.1.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.bundle.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.js"></script>


</body>
</html>