 <div class="modal fade" id="myformusers" role="dialog" style="padding: 100px 0px 70px 0px;">
    <div class="modal-dialog">
    
	      <!-- Modal content-->
	      <div class="modal-content" style="width:400px;height:400px;margin-left:100px">
	        <div class="modal-header" style="background:#26B99A;">
	          <button type="button" class="close " data-dismiss="modal">&times;</button>
	          <h2 class="modal-title" align="center" style="color:#fff"><STRONG>CREAR USUARIO.</STRONG></h2>
	        </div>
	        <div class="modal-body">
				 <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
					                        {{ csrf_field() }}
					 <img id="profile-img" style="display:block;margin:auto" class="profile-img-card" src="{{asset('images/logo.gif')}}" />
	     
				        <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">	
							        <input type="text" required class="form-control" maxlength="20" placeholder="Pepito peréz" name="name" title="Nombre del usuario">	
							       
				    		    </div>
						    </div>
						</div>    
						 <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
							        <input type="email" id="email" required class="form-control" placeholder="Ejemplo@example.com" name="email" title="Correo electronico">	

				       		    	  <i class="mdi mdi-check-circle-outline"></i>	
							       
				    		    </div>
						    </div>
						</div>
						<div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
				       		    	  <i class="mdi mdi-check-circle-outline"></i>	
							        <input  id="password" type="password" required class="form-control" placeholder="*******" name="password" title="Contraseña">	
							       
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


