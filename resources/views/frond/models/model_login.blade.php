<div class="modal fade"  id="myModallogin" role="dialog" style="padding: 100px 0px 70px 0px;">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content" style="width:430px;height:450px;margin-left:100px ">
	        <div class="modal-header " >
	          <button type="button" class="close " data-dismiss="modal">&times;</button>
	          	<h2 class="modal-title" align="center" style="color:#000"><STRONG>LOGIN.</STRONG></h2>
	        </div>
	        	<div class="modal-body">
	 		
	             	<img id="profile-img" style="display:block;margin:auto" class="profile-img-card" src="{{asset('images/logo.gif')}}" />
	     

					     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
				                        {{ csrf_field() }}

						        <div class="row">
									 <div class="col-sm-12">              
								   		 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

								                    <input id="email" type="email" class="form-control" title="Correo electronico" name="email" value="{{ old('email') }}" required autofocus placeholder="ejemplo@gmail.com">

								                                @if ($errors->has('email'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('email') }}</strong>
								                                    </span>
								                                @endif
								                       <div class="input-group-append">
										                      <span class="input-group-text">
										                        <i class="mdi mdi-check-circle-outline"></i>
										                      </span>
								       					</div>
								                 
								    	</div>
								    </div>
								 </div>  
					 	      	 <div class="row">
									 <div class="col-sm-12">  
				             			 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						                     <input id="password"  type="password" class="form-control"  title ="Conraseña" name="password" required placeholder="*************">

						                                @if ($errors->has('password'))
						                                    <span class="help-block">
						                                        <strong>{{ $errors->first('password') }}</strong>
						                                    </span>
						                                @endif
						                    <div class="input-group-append">
						                      <span class="input-group-text">
						                        <i class="mdi mdi-check-circle-outline"></i>
						                      </span>
						                    </div>
				                  		</div>
				                	</div>
				                </div>	

				                <div class="row">
									 <div class="col-sm-12">    
							  			 <div class="form-group">
							                  <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
							             </div>
								             <div class="form-group d-flex justify-content-between">
								                  <div class="form-check form-check-flat mt-0">
								                	   <label class="form-check-label">
								             	       <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame.
								                    </label>
								                  </div>
								                  <a href="#" class="text-small forgot-password text-black">Se te olvidó tu contraseña?</a>
								             </div>
									                <div class="text-block text-center my-3">
										                  <span class="text-small font-weight-semibold">No es un miembro ?</span>
										                  <a href="{{ route('register') }}" class="text-black text-small">Crear una nueva cuenta.</a>
									                </div>
				      				</div>
				      			</div>	
				   		</form>

	          </div>
	        </div>
	      </div>      
	    </div>

  <link href="{{asset('css/app.css')}}" rel="stylesheet">