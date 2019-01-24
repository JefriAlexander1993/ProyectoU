@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER PRODUCTO.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('products.index')}}" title="Listado de todos los productos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <img alt="card image cap" class="card-img-top " src="{{$product->file}}" style="height:100px;width:100px ">
                        <p>
                            <b>
                                Codigo:
                            </b>
                            {{ $product->code}}
                        </p>
                        <p>
                            <b>
                                Nombre:
                            </b>
                            {{ $product->name}}
                        </p>
                        <p>
                            <b>
                                Precio unitario:
                            </b>
                            {{ $product->unit_price}}
                        </p>
                        <p>
                            <b>
                                Precio venta:
                            </b>
                            {{ $product->sale_price}}
                        </p>
                        <p>
                            <b>
                                Descripción:
                            </b>
                            {{ $product->description}}
                        </p>
                        <p>
                            <b>
                                Fecha de creación:
                            </b>
                            {{ date('d M Y', strtotime( $product->created_at))}}
                        </p>
                    </img>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
