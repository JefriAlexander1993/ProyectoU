@extends('frond.pagePrincipal.template')

      
   @section('content')
      <div>
    <h2 style="color: black" class="text-center">Productos destacados</h2>
  </div>
   <div class="col-lg-12" style="padding-left:70px;">
    <div class="row">
    
      @foreach($products as $product ) 
            <div class="col-sm-3" >
              <div class="card text-center" style="width: 17rem; padding-left:1px;padding-bottom:1px ">
              
                  <div  class="card-header card-header-primary">
                          <h4 class="card-title"> {{$product->name}}</h4>  

                  </div> 
              <div class="card-body" > 
                <img class="card-img-top " src="{{$product->file}}"  style="height:100px;width:100px " alt="Card image cap">
                <p class="card-text">{{$product->description}}</p>
                <h4> {{number_format($product->sale_price,1)}}</h4>
                 <div class="card-footer text-muted">
                  visto hace 2 horas
                  </div>
                <a href="{{route('agregar-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary">¿Cotizar?</a>
                <a href="{{route('detalle-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary"> Ver mas <a/>  
              </div>
              
             </div>
            </div>
     
      @endforeach
      
    </div>
  </div>

  
   @endsection
