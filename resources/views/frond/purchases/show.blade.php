@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER COMPRA.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('purchases.index')}}" title="Listado de todos los productos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {{--
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
                    --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
