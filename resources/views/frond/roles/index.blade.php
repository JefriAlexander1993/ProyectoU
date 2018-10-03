@extends('layouts.template')

@section('content')

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE ROLES</strong><a style="padding-top:0%;"  data-toggle="modal" data-target="#myformroles" class="btn btn-success  btn-round btn-sm"><i class="fa fa-plus-square" ></i></a></h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  id="roles" name="roles"  class="table  table-hover">
                      <thead class=" text-primary">
                            <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Apodo</th>
                                            <th class="text-center">Descripción</th>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Acción</th>  
                             </tr>
                     </thead>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>





@include('frond.roles.models.form')   
@include('frond.roles.models.formedit')   
    
@endsection

