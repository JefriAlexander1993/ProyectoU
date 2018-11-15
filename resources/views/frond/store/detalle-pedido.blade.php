@extends('frond/store/template')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h2>Detalle usuario</h2>
			<h4>Nombre</h4>
			<h4>Correo</h4>
			<h4>Telefono</h4>

		</div>
	</div>
	<div class="row">

		<div class="col-ms-12">
			
			<h2>Detalle Pedido</h2>

			<table class="table table-striped">
				<thead>
					<th>nombre</th>
					<th>descripcion</th>
					<th>precio</th>
					<th>cantidad</th>
					<th>Subtotal</th>
				</thead>
				<tbody>
					@foreach($cart as $item)	
						<tr>
							
							<td scope="row">{{$item->nombre}}</td>
							<td scope="row">{{$item->descripcion}}</td>
							<td scope="row">{{number_format($item->precio,2)}}</td>
							<td scope="row">{{$item->quantity}}</td>
							<td scope="row">{{number_format($item->precio*$item->quantity,2)}}</td>
							




						</tr>	

					@endforeach	

				</tbody>
				

			</table>
			<div>
				
				<h3>
					<span class="alert alert-primary">
						Total = ${{number_format($total,2)}}
					</span>
				</h3>
				<div>
				<a href="{{route('catalogo')}}" class="btn btn-danger">Cancelar</a>
				<button class="btn btn-info">Ver cotizacion</button>
				<button class="btn btn-success">Descargar cotizacion</button>
			</div>
			</div>

		</div>
	</div>
</div>

@endsection