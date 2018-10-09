@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idusuarioedit" name="idusuarioedit"></input>
  <div class="container" style="margin-right:3px">
  <div class="row">
  <div class="col-sm-4" style="padding-right:1px">
          <div class="card-body" >
              <!-- Nav tabs -->
                <div class="container" >
                  <ul class="nav nav-tabs" role="tablist" style="padding-left:100px">
                    <li role="plantillas"><button href="#variables"  title="Crear usuario" id="create-form"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></button></li>
                    <li role="plantillas" class="active"><a id="edit-form" title="Editar usuario" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas" class="active"><a id="show-form"title="Ver usuario" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
               </div>

              <!-- Tab panes -->
              <div class="tab-content" style="padding-left:50px">
                <div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editusers" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar usuario</strong></h4>

                        </div>
                        <div class="card-body">
                          <div class="col-sm-12">
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
                        <div class="col-sm-12">
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
                    <div class="card-body" id="showrol" value="">
                        @include('frond.users.fragment.show')
                    </div>
            </div>
          </div>
        </div>
      </div>
</div>


<!--Lista de producto(Tabla).-->

            <div class="col-sm-8">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE USUARIO</strong></a></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  id="users" name="users"  class="table  table-hover">
                      <thead class=" text-primary">
                            <tr>
                                            <th class="text-center">Id</th>
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

@endsection
