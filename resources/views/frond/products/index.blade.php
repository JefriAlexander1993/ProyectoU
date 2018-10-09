@extends('layouts.template')

@section('content')
  <div class="container" style="margin-right:3px">
  <div class="row">
  <div class="col-sm-4" style="padding-right:1px">
          <div class="card-body">
              <!-- Nav tabs -->
              <div class="container">
                  <ul class="nav nav-tabs" role="tablist" style="padding-left:100px">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
                    <input type="hidden" value="" id="idpermisoedit" name="idpermisoedit"></input>
                    <li role="plantillas"><button href="#variables"  title="Crear rol" id="create-form-rol"  name="crear-form" type="button" class="btn btn-success btn-sm" aria-controls="variables" role="tab" data-toggle="tab"><i class="fas fa-plus-square" ></i></button></li>
                    <li role="plantillas" class="active"><a id="edit-form-rol" title="Editar rol" class="btn btn-info btn-sm" href="#table" aria-controls="table" role="tab" data-toggle="tab"><i class="far fa-edit"></i></a></li>
                    <li role="plantillas" class="active"><a id="show-form-rol"title="Ver rol" class="btn btn-secundary btn-sm" href="#ver" aria-controls="table" role="tab" data-toggle="tab"><i class='fas fa-eye'></i></a></li>
                 </ul>
              </div>

              <!-- Tab panes -->
              <div class="tab-content" style="padding-left:50px">
                <div role="tabpanel" class="tab-pane fade in active" id="table" >
                      <div id="editusers" class="card">
                        <div  class="card-header card-header-info">
                          <h4 class="card-title "><strong>Editar producto</strong></h4>

                        </div>
                        <div class="card-body">
                          <div class="col-md-12">
                            @include('frond.permissions.fragment.formedit')
                        </div>
                      </div>
                    </div>

                      </div>

                <div role="tabpanel" class="tab-pane fade" id="variables">
                  <div  class="card">
                    <div  class="card-header card-header-success">
                      <h4 class="card-title "><strong>Crear producto</strong></h4>

                    </div>
                      <div class="card-body">
                        <div class="col-md-12">
                              @include('frond.products.fragment.form')
                      </div>
                    </div>
                  </div>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="ver" >
                  <div  class="card">
                    <div  class="card-header card-header-primary">
                      <h4 class="card-title">Información del producto</h4>

                    </div>
                    <div class="card-body" id="showrol" value="">
                        @include('frond.permissions.fragment.show')
                    </div>
            </div>
          </div>
        </div>
      </div>
  </div>

        <div class="col-sm-8 ">
          <div class="card">
            <div  class="card-header card-header-success">
              <h4 class="card-title "><strong>LISTA DE PRODUCTOS</strong></h4>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                                <table id="products" class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th width="10px">ID</th>
                                            <th>Nombre</th>

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
@section('script')

     <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
     <script src="{{asset('js/datatable.js')}}"></script>
 @endsection
