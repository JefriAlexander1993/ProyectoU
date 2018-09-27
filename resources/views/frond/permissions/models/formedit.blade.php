 <div class="modal fade" id="myformpermissionsedit" role="dialog" style="padding: 100px 0px 70px 0px;">
    <div class="modal-dialog">
    
	      <!-- Modal content-->
	      <div class="modal-content" style="width:400px;height:400px;margin-left:100px">
	        <div class="modal-header" style="background:#26B99A;">
	          <button type="button" class="close " data-dismiss="modal">&times;</button>
	          <h2 class="modal-title" align="center" style="color:#fff"><STRONG>EDITAR PERMISOS.</STRONG></h2>
	        </div>
	        <div class="modal-body">
				 <form class="form-horizontal" method="POST" action="{{ route('roles.store') }}">
					                        {{ csrf_field() }}
					 <img id="profile-img" style="display:block;margin:auto" class="profile-img-card" src="{{asset('images/logo.gif')}}" />
	     
				        <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">	
							        <input type="text" required class="form-control"  placeholder="Ej: crear, editar, actualizar, eliminar" name="name" title="Nombre del rol">	
							       
				    		    </div>
						    </div>
						</div>    
						 <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
							        <input type="text" id="display_name" required class="form-control" placeholder="Ej: Crear-permiso" name="display_name" title="Apodo">
				    		    </div>
						    </div>
						</div>
						<div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
				       		   
							        <input  id="description" type="text" required class="form-control" placeholder="El rol admin: podrá crear, editar, ver , eliminar." name="description" title="Descripción">	
							       
				    		    </div>
						    </div>
						</div>
			
						 <div class="row">
							<div class="col-sm-12">    
							    <div class="form-group">
								      <button type="submit" class="btn btn-success submit-btn btn-block">Agregar</button>
								</div>
							</div>
						</div>		
				</form>
	 
	        </div>
	     </div>
      
    </div>
 </div>


