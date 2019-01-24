@extends('frond.store.template')

@section('content')

@foreach($productoslist as $productos )
<div class="col-md-4">
    <div class="card text-center" style="width: 18rem;">
        <img alt="Card image cap" class="card-img-top" height="200rem" src="assets/img/gotica/camtecho.jpg" width="200rem">
            <div class="card-body">
                <h1 class="card-title">
                    {{$productos->id}}
                </h1>
                <h5 class="card-title">
                    {{$productos->name}}
                </h5>
                <p class="card-text">
                    {{$productos->descripcion}}
                </p>
                <a class="btn btn-primary" href="{{route('agregar-producto',$productos->id)}}">
                    Cotizar
                </a>
                <a class="btn btn-primary" href="{{route('detalle-producto',$productos->id)}}">
                    Ver mas
                    <a>
                    </a>
                </a>
            </div>
        </img>
    </div>
</div>
@endforeach

@endsection
