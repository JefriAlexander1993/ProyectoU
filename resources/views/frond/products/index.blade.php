@extends('layouts.template')

@section('content')

<div class="container">
  <div class="row">
        <div class="col-md-12 ">

                    <div class="panel-heading">
                     <h4><strong>LISTA DE PRODUCTOS</strong>&nbsp;<a href="" class="btn btn-success  btn-sm"><i class="fas fa-plus-square" ></i></a></h4>
                    </div>
                       <div class="panel-body">
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



@endsection
@section('script')

     <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
     <script src="{{asset('js/datatable.js')}}"></script>
 @endsection
