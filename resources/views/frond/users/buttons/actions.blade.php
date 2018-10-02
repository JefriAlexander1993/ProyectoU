<div class="row">
<div class="col-xs-4">
	<a href="#" id="edit" value="" data-toggle="modal" data-target="#myformusersedit"  class="btn btn-default  btn-xs"><i class="fas fa-edit"></i></a>
</div>
<div class="col-xs-4">
	<a href="" class="btn btn-primary  btn-xs"><i class="fas fa-eye""></i></a>
</div>
<div class="col-xs-4">
<form action="" method="POST"> 
{{csrf_field()}} <!--Toque para que sea eliminado por la aplicacion-->
<input type="hidden" name="_method" value="DELETE"><button class="btn  btn-danger  btn-xs"><i class="fas fa-trash-alt" ></i></button>	
</form>
</div>
</div>
