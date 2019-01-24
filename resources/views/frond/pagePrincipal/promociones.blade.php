<div class="col-lg-12">
    <div class="row">
        @foreach($products as $product )
        <div class="col-sm-3">
            <div class="card text-center" style="width: 17rem;  ">
                <div class="card-header card-header-danger">
                    <h3 class="card-title">
                        Descuento 10 %
                    </h3>
                </div>
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
                            <strike>
                                {{number_format($product->sale_price,1)}}
                            </strike>
                        </h4>
                        <h2>
                            {{number_format($product->sale_price - ($product->sale_price*0.1))}}
                        </h2>
                        <a class="btn btn-sm btn-primary" href="{{route('agregar-producto',$product->id)}}" type="button">
                            ¿Cotizar?
                        </a>
                        <a class="btn btn-sm btn-primary" href="{{route('detalle-producto',$product->id)}}" type="button">
                            Ver mas
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
