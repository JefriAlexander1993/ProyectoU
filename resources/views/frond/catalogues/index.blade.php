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
                                    <ul class="collapse list-unstyled text-center"  id="pageSubmenu" style="width:100%">
                                                  <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>TV, Audio&Video:</span>
                                                        </a>
                                                  </li>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu1">       
                                                   <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Tv</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Conversores</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Decodificadores</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Audífonos</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Micrófonos</span></a>
                                                    </li>
                                                     <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Proyectores</span></a>
                                                    </li>
                                                     <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Otros</span></a>
                                                    </li>
                                                     <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Parlante</span></a>
                                                    </li>

                                            </ul>   
                             </ul>
                                      <ul class="collapse list-unstyled text-center"  id="pageSubmenu" style="width:100%">
                                                  <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu2"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Electrónica</span>
                                                        </a>
                                                  </li>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu2">       
                                                   <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Armas Eléctricas</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Baterías</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Calculadoras </span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Lamparas</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Drones</span></a>
                                                    </li>
                                                     <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Cargadores Portatiles</span></a>
                                                    </li>
                                         

                                            </ul>   
                             </ul>
                                      <ul class="collapse list-unstyled text-center"  id="pageSubmenu" style="width:100%">
                                                  <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu3"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Computación</span>
                                                        </a>
                                                  </li>


                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu3">       
                                                   <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Memorias</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Conversores</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Tarjetas de sonido</span></a>
                                                    </li>                                    
                                            </ul>   
                                      </ul>
                                      <ul class="collapse list-unstyled text-center"  id="pageSubmenu" style="width:100%">
                                                  <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu4"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Celulares</span>
                                                        </a>
                                                  </li>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu4">   
                                                    <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Celulares</span></a>
                                                    </li>    
                                                    <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Mandos&Joysticks</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Cargadores</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Tripodes</span></a>
                                                    </li>                                    
                                            </ul>   
                                      </ul>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu" style="width:100%">
                                                  <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu5"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Camaras</span>
                                                        </a>
                                                  </li>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu5">   
                                                    <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Accion Cam</span></a>
                                                    </li>    
                                                    <li class="nav-item " style ="color:#fff" >
                                                        <a  class="nav-link pl-0" href=""><span>Camaras de Seguridad</span></a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Tripodes</span></a>
                                                    </li>                                  
                                            </ul> 
                                            <li class="nav-item ">
                                                        <a  class="nav-link  pl-0" href=""><span>Tablet</span></a>
                                            </li>  
                                         </ul>
                                                      
                                            <li class="nav-item  active" style="width:100%">
                                                          <a  class="nav-link pl-0 text-center " href="#pageSubmenu6"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Salud & Belleza</span>
                                                          </a>
                                            </li>
                                            <ul class="collapse list-unstyled text-center"  id="pageSubmenu6" style="width:100%">    
                                              <li class="nav-item  active">
                                                    <a  class="nav-link pl-0 text-center " href="#pageSubmenu7"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Salud</span>
                                                    </a>
                                              </li>
                                              <ul class="collapse list-unstyled text-center"  id="pageSubmenu7">    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Basculas personales</span></a>
                                                      </li>    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Maquinas Masajeadoras</span></a>
                                                      </li>
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Tensiometros</span></a>
                                                      </li> 
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Humidificadores</span></a>
                                                      </li> 
                                              </ul> 
                                              <li class="nav-item  active">
                                                    <a  class="nav-link pl-0 text-center " href="#pageSubmenu8"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span>Belleza</span>
                                                    </a>
                                              </li>
                                              <ul class="collapse list-unstyled text-center"  id="pageSubmenu8">    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Plancha & Cepillos</span></a>
                                                      </li>    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Cuidado de la cara</span></a>
                                                      </li>
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Secadores</span></a>
                                                      </li> 
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Fajas & Fitness</span></a>
                                                      </li> 
                                              </ul> 
                                             </ul> 
                                             <li class="nav-item  active" style="width:100%">
                                                    <a  class="nav-link pl-0 text-center " href="#pageSubmenu9"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" > <span>Moda & Accesorios</span>
                                                    </a>
                                              </li>
                                             
                                              <ul class="collapse list-unstyled text-center"  id="pageSubmenu9" >    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Relojes & Joyería</span></a>
                                                      </li>    
                                                      <li class="nav-item " style ="color:#fff" >
                                                          <a  class="nav-link pl-0" href=""><span>Accesorios</span></a>
                                                      </li>
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Ropa Interior</span></a>
                                                      </li> 
                                                   
                                              </ul> 
                                              <li class="nav-item  active" style="width:100%">
                                                    <a  class="nav-link pl-0 text-center " href="#pageSubmenu10"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" > <span>Juguetería</span>
                                                    </a>
                                              </li>
                                             
                                              <ul class="collapse list-unstyled text-center"  id="pageSubmenu10" >    
                                                      <li class="nav-item "  >
                                                          <a  class="nav-link pl-0" href=""><span>Peluches</span></a>
                                                      </li>    
                                                      <li class="nav-item "  >
                                                          <a  class="nav-link pl-0" href=""><span>Muñecas</span></a>
                                                      </li>
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Juegos de Mesa</span></a>
                                                      </li> 
                                                       <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Patines & Patinetas</span></a>
                                                      </li> 
                                                   
                                              </ul>
                                                <li class="nav-item  active" style="width:100%">
                                                    <a  class="nav-link pl-0 text-center " href="#pageSubmenu11"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" > <span>Hogar & Cocina</span>
                                                    </a>
                                                </li>
                                             
                                              <ul class="collapse list-unstyled text-center"  id="pageSubmenu11" style="width:100%"> 
                                                   <li class="nav-item  active" style="width:100%">
                                                        <a  class="nav-link pl-0 text-center " href="#pageSubmenu12"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" > <span>Cocina</span>
                                                        </a>
                                                   </li>
                                                  <ul class="collapse list-unstyled text-center"  id="pageSubmenu12" >   
                                                      <li class="nav-item "  >
                                                          <a  class="nav-link pl-0" href=""><span>Peluches</span></a>
                                                      </li>    
                                                      <li class="nav-item "  >
                                                          <a  class="nav-link pl-0" href=""><span>Muñecas</span></a>
                                                      </li>
                                                      <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Juegos de Mesa</span></a>
                                                      </li> 
                                                       <li class="nav-item ">
                                                          <a  class="nav-link  pl-0" href=""><span>Patines & Patinetas</span></a>
                                                      </li> 
                                                  </ul>    
                                                   
                                              </ul>





                                      </ul> 
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
                <h4>{{number_format($product->sale_price,2)}}</h4>
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