
@extends('layouts.template')

@section('content')

<div class="card">
    <div  class="card-header card-header-warning">
                          <h4 class="card-title "><strong>Crear una nueva compra.</strong>&nbsp;&nbsp;<a href="{{route('purchases.index')}}" class="btn btn-default btn-sm "><i class="fa fa-list-alt" aria-hidden="true"></i></a></h4>

                        </div>
<div class="card-body">
<div class="col-md-12" >

{!!Form::open(['route'=>'purchases.store'])!!}<!--Se le pasa, la variable del metodo-->

                          @include('frond.purchases.fragment.form') <!--Incluyo el formulario-->

{!!Form::close()!!}

</div>
</div>
</div>
</div>


@endsection
