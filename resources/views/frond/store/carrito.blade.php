@extends('frond.store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			
			<h1> carrito de cotizaciones</h1>
		</div>
	@if(count($cart))

		<p>
			<a href="{{route('vaciar-carrito')}}" class="btn btn-danger">vaciar carrito</a>
		</p>
		<div class="table-responsive">
			<table class=" table table-dark table-striped">
				<thead >
					<th></th>
					<th>nombre</th>
					<th>descripcion</th>
					<th>precio</th>
					<th>cantidad</th>
					<th>Subtotal</th>
					<th>quitar</th>						


				</thead>
				<tbody>
					@foreach($cart as $item)	
						<tr>
							<td > <img width="120" height="120" src="{{$item->imagen}}"></td>
							<td scope="row">{{$item->nombre}}</td>
							<td scope="row">{{$item->descripcion}}</td>
							<td scope="row">{{number_format($item->precio,2)}}</td>
							<td scope="row">
								<!--input type="number" 
									min="1"
									max="100"
									value="{{$item->quantity}}"
									id="producto_">
								<a 
									
									class="btn btn-warning btn-update-item"
									data-href="{{route('actualizar-producto', [$item->id,$item->quantity])}}"
									data-id="{{$item->id}}">
									<i class="fas fa-sync-alt"></i>
								</a-->
								<input 
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
									>
									<a 
										href="#" 
										class="btn btn-warning btn-update-item"
										data-href="{{ route('actualizar-producto', $item->id) }}"
										data-id = "{{ $item->id }}"
									>
										<i class="fa fa-sync-alt"></i>
									</a>
								
								</td>
							<td scope="row">{{number_format($item->precio*$item->quantity,2)}}</td>
							<td scope="row">
								<a href="{{route('eliminar-producto',$item->id)}}"><i class="fas fa-times-circle"></i></a>
							</td>




						</tr>	

					@endforeach	

				</tbody>



			</table>
			<h3>
				<span class="alert alert-primary">
					Total = ${{number_format($total,2)}}
				</span>
			</h3>

		</div>
		@else 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="alert alert-primary" role="alert">
 					<h1>No 
 					 se han <br>
 					 <br>
 					 selecionado <br>
 					 <br>
 					 productos </h1>
					</div>

				</div>
			</div>

		</div>
		
		@endif
		<p>
			<a href="{{route('catalogo')}}" class="btn btn-primary">agregar otro producto </a>

			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Continuar</button>
		</p>	
	</div>



<!--inicia modal -->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos necesarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" id="nombreU" >Nombre</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">correo</label>
            <input class="form-control" id="message-text"></input>
          </div>
        
          <div class="form-group">
            <label for="message-text" class="col-form-label">telefono/celular</label>
            <input class="form-control" id="message-text"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
        <a href="{{route('detalle-pedido')}}" type="button" class="btn btn-primary">Continuar</a>
      </div>
    </div>
  </div>
</div>
<!--fin modal -->



@endsection