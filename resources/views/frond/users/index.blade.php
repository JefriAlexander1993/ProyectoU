@extends('layouts.master')

@section('content')
          
<div class="container">
  <div class="row">
        <div class="col-md-12 ">
        
                    <div class="panel-heading">
                       <h4><strong>LISTA DE USUARIOS</strong>&nbsp;<a data-toggle="modal" data-target="#myformusers" class="btn btn-success  btn-sm"><i class="fas fa-plus-square" ></i></a></h4>
                       <input type="text" value="{{$users}}}" name="">
                    </div>
                       <div class="panel-body">    
                                <table id="users" class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Acciones</th> 
                                          </tr>
                                        </thead>      
                                </table>
                      </div>
            
        </div>
   </div>
</div>

@include('frond.users.models.form') 
@include('frond.users.models.formedit') 

   
@endsection

