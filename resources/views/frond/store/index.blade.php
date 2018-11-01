@extends('frond.store.template')

@section('content')

	<div class="products">
		@foreach($productoslist as $productos ) 
	<div class="col-md-4">
    <div class="card text-center" style="width: 18rem;">
  <img class="card-img-top" width="200rem" height="200rem" src="assets/img/gotica/camtecho.jpg" alt="Card image cap">
  <div class="card-body">
  	<h1 class="card-title"> {{$productos->id}}</h1>
    <h5 class="card-title">{{$productos->name}}</h5>
    <p class="card-text">{{$productos->descripcion}}</p>
    <a href="{{route('agregar-producto',$productos->id)}}  class="btn btn-primary">¿Cotizar?</a>
    <a href="{{route('detalle-producto',$productos->id)}}"> Ver mas <a/>
    	
  </div>
  
</div>
</div>


@endforeach

	</div>
@endsection	