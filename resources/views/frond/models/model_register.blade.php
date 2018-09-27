
	 <div class="modal fade"  id="myModalregister" role="dialog" style="padding: 100px 0px 70px 0px;">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content" style="width:430px;height:450px;margin-left:100px ">
	        <div class="modal-header " >
	          <button type="button" class="close " data-dismiss="modal">&times;</button>
	          	<h2 class="modal-title" align="center" style="color:#000"><STRONG>REGISTRO.</STRONG></h2>
	        </div>
	        	<div class="modal-body">
	 		
	             	<img id="profile-img" style="display:block;margin:auto" class="profile-img-card" src="{{asset('images/logo.gif')}}" />
	     

	            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
	                                {{ csrf_field() }}

				            <div class="row">
								<div class="col-sm-12">
					                <div class=" form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					                            <input id="name" type="text"  title="Pepito perez" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre del usuario">
					                                        @if ($errors->has('name'))
					                                            <span class="help-block">
					                                                <strong>{{ $errors->first('name') }}</strong>
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
					                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					                    <input id="email" type="email"  title="Ej: pepitoperez@gmail.com" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ejemplo@gmail.com">

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
					                               <input id="password" title ="**********" type="password" class="form-control" name="password"  placeholder="Contraseña" required>


					                                        @if ($errors->has('password'))
					                                            <span class="help-block">
					                                                <strong>{{ $errors->first('password') }}</strong>
					                                            </span>
					                                        @endif
					                                
					                 </div>
				             	</div>
				             </div>
				         
				             <div class="row">
							    <div class="col-sm-12">   
					                <div class="form-group">
					                      <input id="password-confirm" type="password"  title ="**********" class="form-control"  name="password_confirmation" required placeholder=" Confirmar contraseña">
					                            <div class="input-group-append">
					                              <span class="input-group-text">
					                                <i class="mdi mdi-check-circle-outline"></i>
					                              </span>
					                            </div>
					                </div>
					            </div>    
					         </div>   	
					                 
				            <div class="modal-footer" >
				            	<div class="row">
							    	<div class="col-sm-12"> 
					                    <div class="form-group text-center"> 
					                          <button  type="submit" class="btn btn-primary submit-btn btn-block">Registrar</button>
					                    </div>  
					                      <div class="text-block text-center my-3">
					                          <span class="text-small font-weight-semibold">Ya tengo y cuenta ?</span>
					                          <a href="{{route('login')}}" class="text-black text-small">Login</a>
					                      </div>
				                    </div> 
				               </div>
				            </div>           
	                </form>
	          </div>
	        </div>
	      </div>      
	    </div>

  <link href="{{asset('css/app.css')}}" rel="stylesheet">