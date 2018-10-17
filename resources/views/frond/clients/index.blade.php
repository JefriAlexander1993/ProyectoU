
@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idbrandedit" name="idbrandedit"></input>
  <div class="container" >
  <div class="row">
  <div class="col-lg-4" >
          <div class="card-body" >
              <!-- Nav tabs -->
                <div class="container" >
                  <ul class="nav nav-tabs" role="tablist" style="padding-left:70px">
                    <li role="plantillas"><button href="#variables"  title="Crear usuario" id="create-form"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></button></li>
                    <li role="plantillas" class="active"><a id="edit-form" title="Editar usuario" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas" class="active"><a id="show-form"title="Ver usuario" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
               </div>

              <!-- Tab panes -->
              <div class="tab-content" >
                <div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editusers" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar cliente</strong></h4>

                        </div>
                        <div class="card-body">
                          <div class="col-sm-12">
                            @include('frond.clients.fragment.formedit')
                        </div>
                      </div>
                    </div>

                      </div>

                <div role="tabpanel" class="tab-pane fade" id="variables">
                  <div  class="card">
                    <div  class="card-header card-header-success">
                      <h4 class="card-title "><strong>Crear cliente</strong></h4>

                    </div>
                      <div class="card-body">
                        <div class="col-sm-12">
                              @include('frond.clients.fragment.form')
                      </div>
                    </div>
                  </div>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="ver" >
                  <div  class="card">
                    <div  class="card-header card-header-primary">
                      <h4 class="card-title">Información del cliente</h4>

                    </div>

                    <div class="card-body" id="showclient" value="">
                        @include('frond.clients.fragment.show')
                    </div>
            </div>
          </div>
        </div>
      </div>
</div>


<!--Lista de producto(Tabla).-->

            <div class="col-lg-8">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE CLIENTES</strong></a></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    <table id="clients" class="table table-striped table-hover">
                            <thead class=" text-primary">
                              <tr>

                                <th class="text-center">Nuip</th>
                                <th class="text-center">Nombres</th>
                                <th class="text-center">Teléfono</th>
                                <th class="text-center">Dirección</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Acciones</th>

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
