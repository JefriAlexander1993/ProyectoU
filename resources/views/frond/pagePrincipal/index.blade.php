@extends('frond.pagePrincipal.template')  
@section('content')
<h2 class="text-center">
    <strong>
        Productos más vendidos.
    </strong>
</h2>
<div class="col-lg-12">
    <div class="row">
        @foreach($products as $product )
        <div class="col-sm-3">
            <div class="card text-center" style="width: 17rem; padding-left:1px;padding-bottom:1px ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">
                        {{$product->name}}
                    </h4>
                </div>
                <div class="card-body">
                    <img alt="Card image cap" class="card-img-top " src="{{$product->file}}" style="height:100px;width:100px ">
                        <p class="card-text">
                            {{$product->description}}
                        </p>
                        <h4>
                            {{number_format($product->sale_price,1)}}
                        </h4>
                        <div class="card-footer text-muted">
                            Visto hace 2 horas
                        </div>
                        <a class="btn btn-sm btn-primary" href="{{route('agregar-producto',$product->id)}}">
                            ¿Cotizar?
                        </a>
                        <a class="btn btn-sm btn-primary" href="{{route('detalle-producto',$product->id)}}">
                            Ver más
                            <a>
                            </a>
                        </a>
                    </img>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
