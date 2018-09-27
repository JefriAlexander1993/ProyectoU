@extends('layouts.master')

@section('content')
          
<div class="container">
  <div class="row">
        <div class="col-md-12 ">

                    <div class="panel-heading">
                   <h4><strong>LISTA DE LOTES</strong>&nbsp;<a href="" class="btn btn-success  btn-sm"><i class="fas fa-plus-square" ></i></a></h4>
                    </div>
                       <div class="panel-body">    
                                <table id="lots" class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th width="10px">ID</th>
                                          
                                          </tr>
                                        </thead>      
                                </table>
                      </div>
              
        </div>
   </div>
</div>

    
@endsection

