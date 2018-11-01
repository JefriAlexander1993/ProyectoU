
 	<div>
 		<h2 style="color: black" class="text-center">Promociones</h2>
 	</div>
   <div class="col-lg-12" style="padding-left:70px;">
  	<div class="row">
		
      @foreach($products as $product ) 
            <div class="col-sm-3" >
              <div class="card text-center" style="width: 17rem; padding-left:1px;padding-bottom:1px ">
              	<div class="card-header card-header-danger">
              	<h3 class="card-title"> descuento 10 %</h3> 
              	</div>
                  <div  class="card-header card-header-primary">
                          <h4 class="card-title"> {{$product->name}}</h4>  

                  </div> 
              <div class="card-body" > 
                <img class="card-img-top " src="{{$product->file}}"  style="height:100px;width:100px " alt="Card image cap">
                <p class="card-text">{{$product->description}}</p>
                <h4> <strike>{{number_format($product->sale_price,1)}}</strike></h4>
                <h2>{{number_format($product->sale_price - ($product->sale_price*0.1))}}</h2>
                <a href="{{route('agregar-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary">¿Cotizar?</a>
                <a href="{{route('detalle-producto',$product->id)}}" type="button" class="btn btn-sm btn-primary"> Ver mas <a/>  
              </div>
              
             </div>
            </div>
     
      @endforeach
  		
  	</div>


  </div>
 




