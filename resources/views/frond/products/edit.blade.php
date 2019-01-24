@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            EDITAR PRODUCTO.
                        </strong>
                        <a class="btn btn-default btn-smpull-right" href="{{ route('products.index')}}" title="Listado de todos los productos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($product1, ['route' => ['products.update', $product1->id], 'files' => true, 'method' => 'PUT']) !!}
                        @include('frond.products.fragment.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
