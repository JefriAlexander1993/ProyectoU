@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idusuarioedit" name="idusuarioedit"></input>
  <!--<input type="button" onclick="javascript:visible_div();" value="div visible" />-->
  <div class="container">
  <div class="row">
  <div class="col-lg-4">
          <div class="card-body">
  						<!-- Nav tabs -->
              <div class="container">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="plantillas"><button href="#variables"  title="Crear usuario" id="create-form"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></button></li>
                    <li role="plantillas" class="active"><a id="edit-form" title="Editar usuario" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas" class="active"><a id="show-form"title="Ver usuario" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
              </div>


  						<!-- Tab panes -->
  						<div class="tab-content">
  							<div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editusers" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar usuario</strong></h4>

                        </div>
                        <div class="card-body">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"  class="form-control" id="idu" name="idu" >
                                    <input type="hidden" value="ELIMINAR"  class="form-control" id="iduser" name="iduser" >
                                    </div>
                              </div>
                            </div>
                            @include('frond.users.fragment.formedit')
                        </div>
                      </div>
                    </div>

                      </div>

  							<div role="tabpanel" class="tab-pane fade" id="variables">
                  <div  class="card">
                    <div  class="card-header card-header-success">
                      <h4 class="card-title "><strong>Crear usuario</strong></h4>

                    </div>
                      <div class="card-body">
                        <div class="col-md-12">
                          @include('frond.users.fragment.form')
                      </div>
                    </div>
                  </div>
  					</div>
            <div role="tabpanel" class="tab-pane fade in active" id="ver" >
                  <div  class="card">
                    <div  class="card-header card-header-primary">
                      <h4 class="card-title">Información del usuario</h4>
                    </div>
                    <div class="card-body" id="showusers" value="">
                        @include('frond.users.fragment.show')
                    </div>
            </div>
          </div>

            	</div>
              	</div>
                	</div>

            <div class="col-lg-8">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE USUARIOS</strong></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  id="users" name="users"  class="table  table-hover">
                      <thead class=" text-primary">
                        <tr>
                                            <th class="text-center" >ID</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Acción</th>

                        </tr>
                     </thead>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      @include('frond.users.fragment.confirmacion')

@endsection
