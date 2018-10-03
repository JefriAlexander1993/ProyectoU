 <div class="modal fade" id="myformusersedit" role="dialog" style="padding: 40px 30px 0px 0px;">

	    <div class="row">
            <div class="col-md-6">
              <div class="card"  style="width:500px;height:500px;margin-left:500px">
                <div class="card-header card-header-primary">
                	     <button type="button" class="close " data-dismiss="modal">&times;</button>
                  <h4 class="card-title">Editar usuario</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
             		 <form class="form-horizontal" method="POST" action="">
					                        {{ csrf_field() }}
			
				        <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">	
				       		    	<label class="bmd-label-floating">Nombres</label>
							        <input type="text" required class="form-control" maxlength="20"  name="name" title="Nombre del usuario">	
							       
				    		    </div>
						    </div>
						</div>    
                   
						 <div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
				       		    	<label class="bmd-label-floating">Email</label>
							        <input type="email" id="email" required class="form-control"  name="email" title="Correo electronico">	

				       		    	  <i class="mdi mdi-check-circle-outline"></i>	
							       
				    		    </div>
						    </div>
						</div>
						<div class="row">
				       		<div class="col-sm-12"> 
				       		    <div class="form-group">
				       		   <label class="bmd-label-floating">Constraseña</label>
							        <input  id="password" type="password" required class="form-control"  name="password" title="Contraseña">	
							       
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
    
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
<!--
              <div class="col-md-6">
              <div class="card card-profile" >
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
        
	     </div>
      
-->
 </div>
  </div>

			
			