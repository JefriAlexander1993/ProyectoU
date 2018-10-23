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


      @include('frond.store.partials.navbar')



	<div class="row">
  		 <div class="col-lg-2" style="height:100%;border: 1px solid" >
          <aside class="col-12 p-0 bg-dark" >
                  <nav class="navbar navbar-expand  flex-md-column flex-row align-items-start" >
                      <div class="collapse navbar-collapse" style="width:100% ">
                          <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                
                                              <li class="nav-item  active" style="width:100%">
                  <a  class="nav-link pl-0 text-center " href="#pageSubmenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Tecnologia</span>
                  </a>
                </li>
              <ul class="collapse list-unstyled text-center"  id="pageSubmenu">
                <li class="nav-item " style ="color:#fff" >
                    <a  class="nav-link pl-0" href=""><span>Computadores</span></a>
                </li>
                <li class="nav-item ">
                    <a  class="nav-link  pl-0" href=""><span>Celulares</span></a>
                </li>
                  <li class="nav-item ">
                    <a  class="nav-link  pl-0" href=""><span>Impresoras</span></a>
                </li>
   
              </ul>
                  <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                            <a class="nav-link pl-0" href="#">Link</a>
                  </li>
                              
                          </ul>
                      </div>
                  </nav>
           </aside>
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