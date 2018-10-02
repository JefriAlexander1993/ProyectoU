@extends('layouts.master')

@section('content')
             <br>
<div class="container">
  <div class="row">
        <div class="col-md-12 ">
     
                    <div class="panel-heading">
                      <h4><strong>LISTA DE PERMISOS</strong>&nbsp;<a href="" data-toggle="modal" data-target="#myformpermissions"  class="btn btn-success  btn-sm"><i class="fas fa-plus-square" ></i></a></h4>
                    </div>
                       <div class="panel-body">    
                                <table id="permissions" class="table table-striped table-hover">
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

@include('frond.permissions.models.form') 
@include('frond.permissions.models.formedit')     

@endsection

