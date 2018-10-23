@extends('frond.store.template')

@section('content')
<h2>detalle de producto</h2>

<div class="productos-block">
	
<img src="">

</div>

<h2>{{$productos->nombre}}</h2><hr>
<p>{{$productos->descripcion}}</p>
@endsection