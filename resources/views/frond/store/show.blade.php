@extends('frond.store.template')
@section('content')
<div class="container" style="padding-left:400px ">
    <h2 style="color: #38338A">
        {{ $product->name}}
    </h2>
    <img alt="card image cap" class="card-img-top " src="{{$product->file}}" style="height:100px;width:100px ">
        <p>
            <strong>
                Codigo:
            </strong>
            {{ $product->code}}
        </p>
        <p>
            <strong>
                Precio unitario:
            </strong>
            {{ $product->unit_price}}
        </p>
        <p>
            <strong>
                Precio venta:
            </strong>
            {{ $product->sale_price}}
        </p>
        <p>
            <strong>
                Descripción:
            </strong>
            {{ $product->description}}
        </p>
        <p>
            <strong>
                Fecha de creación:
            </strong>
            {{ date('d M Y', strtotime( $product->created_at))}}
        </p>
    </img>
</div>
@endsection
