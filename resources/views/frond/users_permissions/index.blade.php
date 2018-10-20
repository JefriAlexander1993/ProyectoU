@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idasignacionpermissionedit" name="idasignacionpermissionedit"></input>
  <div class="row">
  <div class="col-lg-4" >
          <div class="card-body" >
              <!-- Nav tabs -->
              <div class="container" >
                <ul class="nav nav-tabs" role="tablist" style="padding-left:70px">
                    <li role="plantillas"><a href="#variables"  title="Crear usuario" id="create-form"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></a></li>
                    <li role="plantillas" ><a id="edit-form" title="Editar usuario" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas"><a id="show-form"title="Ver usuario" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
               </div>

              <!-- Tab panes -->
              <div class="tab-content" style="padding-left:20px" >
                <div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editusers" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar asignación de permiso</strong></h4>

                        </div>
                        <div class="card-body">

                            @include('frond.users_permissions.fragment.formedit')

                      </div>
                    </div>

                      </div>

                <div role="tabpanel" class="tab-pane fade" id="variables">
                  <div  class="card">
                    <div  class="card-header card-header-success">
                      <h4 class="card-title "><strong>Crear asigación de permiso a rol</strong></h4>

                    </div>
                      <div class="card-body">

                              @include('frond.users_permissions.fragment.form')

                    </div>
                  </div>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="ver" >
                  <div  class="card">
                    <div  class="card-header card-header-primary">
                      <h4 class="card-title">Información de asiganción de permisos a roles</h4>

                    </div>
                    <div class="card-body" id="showrol" value="">
                        @include('frond.users_permissions.fragment.show')
                    </div>
            </div>
          </div>
        </div>
      </div>
</div>


<!--Lista de producto(Tabla).-->

            <div class="col-lg-8" >
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE ASIGNACIÓN DE PERMISO A ROLES</strong></a></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  id="role_permission" name="users"  class="table  table-hover">
                      <thead class=" text-primary">
                            <tr>
                                            <th >Id</th>
                                            <th >Id rol</th>
                                            <th >Id permiso</th>
                                            <th class="text-center">Acción</th>
                             </tr>
                     </thead>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
