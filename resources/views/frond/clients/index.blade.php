
@extends('layouts.master')

@section('content')

   <br>
   <div class="row">
        <div class="col-md-12">
                <div class="panel-heading">
                     <h4><strong>LISTA DE CLIENTES</strong>&nbsp;<a href="" class="btn btn-success  btn-xs"><i class="fas fa-plus-square" ></i></a></h4>
                </div>
                       <div class="panel-body">  
                
                                <table id="clients" class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th >ID</th>
                                            <th>Nuip</th>  
                                            <th>Nombres</th>
                                            <th>Apellidos</th>  
                                            <th>Documento</th>   
                                            <th>Empresa</th>  
                                            <th>Dirección</th>
                                            <th>Tel</th>  
                                            <th>Cel</th>  
                                            <th>Fax</th>  
                                            <th>Correo</th> 
                                            <th>Ciudad</th>  
                                            <th>Dept</th>      
                                            <th>Acciones</th>    
                                          </tr>
                                        </thead>
                                       
                                </table>          
                        </div>
     
        </div>
</div>


@endsection




