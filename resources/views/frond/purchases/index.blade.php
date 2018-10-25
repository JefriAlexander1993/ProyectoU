
@extends('layouts.template')

@section('content')
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
  <input type="hidden" value="" id="idusuarioedit" name="idusuarioedit"></input>
  <div class="row" >
            <div class="col-lg-12" >
              <div class="card">
                <div  class="card-header card-header-warning">
                  <h4 class="card-title "><strong>LISTADO DE COMPRAS</strong>&nbsp;<a href="{{route('purchases.create')}}" class="btn btn-default  btn-sm"><i class="fas fa-plus-square" ></i></a><a href="{{ url('/userspdf') }}" class="btn btn-sm btn-danger" title="Exportar a pdf"><i class="far fa-file-pdf"></i> </a> <a href="{{ url('/usersexcel') }}" class="btn btn-sm btn-success" title="Exportar a excel"><i class="far fa-file-excel"></i> </a></h4>

                </div>
                <div class="card-body" >
                  <div class="table-responsive">
                    <table  id=""  class="table  table-hover" >
                      <thead class=" text-primary">
                            <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Email</th>

                                            <th class="text-center">Acción</th>
                             </tr>
                     </thead>

                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>

@endsection
