
<input id="url_product" type="hidden" value="{{url('products/getProduct/')}}">

<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label>Producto(*)</label>	
{!!Form::select('code',$products, null,['class'=>'form-control selectpicker','data-live-search'=>'true', 'data-style'=>'btn btn-warning','title'=>'Elige tu Producto.','id' =>'code','name'=>'code', 'required'=>'required','onKeyUp'=>'this.value = this.value.toUpperCase()','title'=>'Elige tu producto...'])!!}
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
<input  value="0" type="hidden" id="compra" name="quantityproduct" class="form-control" >
</div>
</div>
<div class="col-sm-4" >
<div class="form-group">
<label><strong>Total de compra</strong></label>
<input class="form-control text-center" id="totalPurchase" name="totalPurchase" readonly="readonly" value="0" text-aling="right">
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
<div class="col-sm-12" >
<div class="form-group">
{!!Form::button('<i class="far fa-save" aria-hidden="true"></i>&nbsp;', array('type' => 'sublime', 'id'=>'enviarCompra', 'class'=>'form-control btn btn-success'))!!}
</div>
</div>


</div>
