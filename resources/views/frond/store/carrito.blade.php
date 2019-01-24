@extends('frond.store.template')

@section('content')
<div class="container text-center">
    <br>
        <br>
            @if(count($cart))
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-primary">
                    <strong>
                        CARRITO DE COTIZACIÓN
                    </strong>
                    <a class="btn btn-danger btn-sm" href="{{route('vaciar-carrito')}}" title="Vaciar carrito">
                        Vaciar
                    </a>
                </div>
                <div class="card-body">
                    <table class=" table " id="tablecotizacion" name="tablecotizacion" style="color:#000">
                        <thead>
                            <th>
                                Imagén
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripcion
                            </th>
                            <th>
                                Precio Unitario
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>
                                Quitar
                            </th>
                        </thead>
                        <tbody>
                            @foreach($cart as $item)
                            <tr>
                                <td>
                                    <img height="120" src="{{$item->file}}" width="120"/>
                                </td>
                                <td scope="row">
                                    {{$item->name}}
                                </td>
                                <td scope="row">
                                    {{$item->description}}
                                </td>
                                <td scope="row">
                                    {{$item->sale_price}}
                                </td>
                                <td scope="row">
                                    <input id="product_{{ $item->id }}" max="100" min="1" type="number" value="{{ $item->quantity }}">
                                        <a class="btn btn-warning btn-sm" data-href="{{ route('actualizar-producto', $item->id) }}" data-id="{{ $item->id }}" href="#" id="update-cotizacion" name="update-cotizacion">
                                            <i class="fa fa-sync-alt">
                                            </i>
                                        </a>
                                    </input>
                                </td>
                                <td id="subtotalcot" scope="row">
                                    {{$item->sale_price * $item->quantity}}
                                </td>
                                <td scope="row">
                                    <a href="{{route('eliminar-producto',$item->id)}}">
                                        <i class="fas fa-times-circle">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h3>
                        Total:
                        <input class="text-center" disabled="" id="totalcarrito" name="totalcarrito" style="border:transparent;background:#fff;color:red" type="number"/>
                    </h3>
                </div>
            </div>
            @else
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-primary">
                    Carrito de cotizaciones
                </div>
                <div class="card-body">
                    <h1 style="color:#000">
                        No se han selecionado productos.
                    </h1>
                </div>
            </div>
            @endif
            <p>
                <a class="btn btn-primary btn-sm" href="{{route('catalogo')}}">
                    Agregar otro producto
                </a>
                <button class="btn btn-primary btn-sm" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap" type="button">
                    Continuar
                </button>
                <a class="btn btn-sm btn-danger" href="{{ url('/cardspdf') }}" title="Exportar a pdf">
                    <i class="far fa-file-pdf">
                    </i>
                </a>
            </p>
        </br>
    </br>
</div>
<!--inicia modal -->
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Datos necesarios
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label" for="recipient-name" id="nombreU">
                            Nombre
                        </label>
                        <input class="form-control" id="recipient-name" type="text">
                        </input>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="message-text">
                            correo
                        </label>
                        <input class="form-control" id="message-text"/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="message-text">
                            Teléfono/Celular
                        </label>
                        <input class="form-control" id="message-text"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" data-dismiss="modal" type="button">
                    Cancelar
                </button>
                <a class="btn btn-primary" href="{{route('detalle-pedido')}}" type="button">
                    Continuar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
