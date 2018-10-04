<div class="td-actions text-right">
	<div class="row">
		<div class="col-sm-4">
		<a href="#" id="edit" value="" value="" data-toggle="modal" data-target="#myformusersedit"  type="button" rel="tooltip" class="btn btn-info btn-round "><i class="fas fa-edit"></i></a>
		</div>


		<div class="col-sm-4">
			<a href=""  type="button" rel="tooltip" class="btn btn-secunday btn-round "><i class="fas fa-eye""></i></a>
		</div>



		<div class="col-sm-4">
		<form action="" method="POST"> 
		{{csrf_field()}} <!--Toque para que sea eliminado por la aplicacion-->
		<input type="hidden" name="_method" value="DELETE">
		    <button type="button" rel="tooltip" class="btn  btn-danger btn-round">
         <i class="fas fa-trash-alt" ></i>
                </button
		</form>
		</div>
	</div>
</div