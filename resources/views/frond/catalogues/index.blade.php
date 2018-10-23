<!DOCTYPE html>
<html>
<head>
	<title>Catalogo de productos</title>
  <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/document.css')}}">
</head>
<body>

<div class="row">
  <div class="col-lg-12" >
      @include('frond.store.partials.navbar')
  </div>
</div>


	<div class="row">
		<div class="col-lg-2" style="background:#38338A" >
    <h4 class="text-center" >CATEGORIAS</h4>			
	<!--ul class="list-group">
	
  <li class="list-group-item">Tecnologia</li>
  <li class="list-group-item">Ropa</li>
  <li class="list-group-item">Accesorios</li>
  
</ul-->

<!--<div class="accordion" id="accordionExample">
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
</div>-->

		</div>
		

<!--lista de productos -->


<div class="col-lg-10" style="padding-left:70px;">
	<div class="row">

    @foreach($products as $product ) 
          <div class="col-lg-4" >
            <div class="card text-center" style="width: 17rem; padding-left:1px;padding-bottom:1px ">
                <div  class="card-header card-header-primary">
                        <h4 class="card-title"> {{$product->id}} {{$product->name}}</h4>     
                </div> 
            <div class="card-body" > 
              <img class="card-img-top " src="{{$product->file}}"  style="height:100px;width:100px " alt="Card image cap">
              <p class="card-text">{{$product->description}}</p>
              <h4>{{number_format($product->sale_price,1)}}</h4>
              <a href="{{route('agregar-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary">¿Cotizar?</a>
              <a href="{{route('detalle-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary"> Ver mas <a/>  
            </div>
            
           </div>
          </div>
   
    @endforeach
		
	</div>


</div>

</div>	



<script src="plugins/jquery/js/jquery-3.3.1.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.bundle.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="" src="plugins/bootstrap/js/bootstrap.js"></script>


</body>
</html>