@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            CREAR PRODUCTO.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('products.index')}}" title="Listado de todos los productos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route'=>'products.store', 'files' => true]) !!}

                      @include('frond.products.fragment.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
