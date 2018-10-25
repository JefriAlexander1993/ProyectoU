 
<input id="url_product" type="hidden" value="{{url('products/getProduct/')}}">

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Codigo (*)</label>	
<input type="number" name="code" id="code" class="form-control" min="1" title='Ingresa un codigo de un articulo existente' placeholder="Ej: 12">

</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
	<button type="button" class="btn btn-success btn-sm" id="btn-purchase" name="btn-purchase"> <i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Agregar </button>

</div>
</div>
<div class="col-sm-2 ">
<div class="form-group">
<input  value="0" type="hidden" id="compra" name="cantidadarticulos" class="form-control" >
</div>
</div>
<div class="col-sm-4" >
<div class="form-group">
<label> Total de compra</label>
<input class="form-control" id="totalPurchase" name="totalPurchase" readonly="readonly" value="0" text-aling="right">
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 table-responsive">
<table class="table table-header" id="tbl-purchases" name="tbl-purchases">
	<thead>
		<tr>
		<th class="text-center" >Codigo</th>
		<th class="text-center" >Nombre</th>
        <th class="text-center" style="width:10px">Cantidad</th>
		<th class="text-center">Precio de Venta</th>
		<th class="text-center">Sub-Total</th>
		<th class="text-center" colspan="3">Acción</th>	
        </tr>
	</thead>
	<tbody>

	</tbody>
</table>

</div>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;', array('type' => 'sublime', 'id'=>'enviarCompra', 'class'=>'btn btn-primary btn-lg btn-block btn-sm', 'onclick'=>'confirmacion()' ))!!}
</div>
</div>
