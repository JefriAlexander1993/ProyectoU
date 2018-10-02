@extends('layouts.master')

@section('content')
             <br>
<div class="container">
  <div class="row">
        <div class="col-md-12 ">
              <div class="panel-heading">
                      <h4><strong>LISTA DE ROLES</strong>&nbsp;<a href="" data-toggle="modal" data-target="#myformroles" class="btn btn-success  btn-sm"><i class="fas fa-plus-square" ></i></a></h4>
              </div>
                       <div class="panel-body">    
                                <table id="roles" class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th >Id</th>
                                            <th >Nombre</th>
                                            <th >Apodo</th>
                                            <th >Descripción</th>
                                            <th >Fecha de creación</th>
                                          	<th >Acción</th>
                                          </tr>
                                        </thead>      
                                </table>
                      </div>
               
        </div>
   </div>
</div>
@include('frond.roles.models.form')   
@include('frond.roles.models.formedit')   
    
@endsection

