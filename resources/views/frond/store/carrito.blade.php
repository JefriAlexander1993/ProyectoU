
@extends('frond.store.template')

@section('content')
	<div class="container text-center">
		
						<br>
			<br>

		
	@if(count($cart))

			<div class="card card-nav-tabs text-center">
				  <div class="card-header card-header-primary">
				 <strong>CARRITO DE COTIZACIÓN</strong>  <a href="{{route('vaciar-carrito')}}" class="btn btn-danger  btn-sm" title="Vaciar carrito">Vaciar</a>
				   	
				  </div>
				  <div class="card-body">
			
			<table class=" table " id="tablecotizacion" name ="tablecotizacion" style="color:#000">
				<thead >
					<th>Imagén</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio Unitario</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
					<th>Quitar</th>						


				</thead>
				<tbody>
					
					@foreach($cart as $item)	
						<tr>
							<td > <img width="120" height="120" src="{{$item->file}}"></td>
							<td scope="row">{{$item->name}}</td>
							<td scope="row">{{$item->description}}</td>
							<td scope="row">{{$item->sale_price}}</td>
							<td scope="row">
						
								<input 
										type="number"
										min="1"
										max="100"
										value="{{ $item->quantity }}"
										id="product_{{ $item->id }}"
									>
									<a 
										href="#" 
										class="btn btn-warning btn-sm"
										data-href="{{ route('actualizar-producto', $item->id) }}"
										data-id = "{{ $item->id }}"
										id="update-cotizacion"
										name="update-cotizacion"
									>
										<i class="fa fa-sync-alt"></i>
									</a>
								
								</td>
							<td scope="row" id="subtotalcot">{{$item->sale_price * $item->quantity}}</td>
							<td scope="row">
								<a href="{{route('eliminar-producto',$item->id)}}"><i class="fas fa-times-circle"></i></a>
							</td>




						</tr>	

					@endforeach	
				</tbody>


			</table>
				
					  <h3>Total:<input class ="text-center" style="border:transparent;background:#fff;color:red" type="number" name="totalcarrito" id="totalcarrito" disabled=""></h3>
		</div>
		


		</div>
		@else 

		<div class="card card-nav-tabs text-center">
				  <div class="card-header card-header-primary">
				    Carrito de cotizaciones
				  </div>
				  <div class="card-body">
				<h1 style="color:#000">No se han selecionado productos.</h1>
				  </div>
				
		</div>
	

		
		@endif

		<p>
			<a href="{{route('catalogo')}}" class="btn btn-primary btn-sm">Agregar otro producto </a>

			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Continuar</button>
			<a href="{{ url('/cardspdf') }}" class="btn btn-sm btn-danger" title="Exportar a pdf"><i class="far fa-file-pdf"></i> </a>
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


@endsection