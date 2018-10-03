@extends('layouts.template')

@section('content')
   <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div  class="card-header card-header-success">
                  <h4 class="card-title "><strong>LISTA DE USUARIOS</strong><a style="padding-top:0%;"  data-toggle="modal" data-target="#myformusers" class="btn btn-success  btn-round btn-sm"><i class="fa fa-plus-square" ></i></a></h4>
             
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table  id="users" name="users"  class="table  table-hover">
                      <thead class=" text-primary">
                        <tr>
                                            <th class="text-center" >ID</th>
                                            <th class="text-center">Nombre</th>  
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Acciones</th>    
                        </tr>
                     </thead>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>



@include('frond.users.models.form') 
@include('frond.users.models.formedit') 

   
@endsection

