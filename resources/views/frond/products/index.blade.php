@extends('layouts.plantilla')

@section('content')
<div class="card">
    <div class="card-header">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#listproducts">
                    Listado de productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#search">
                    Busqueda avanzada
                </a>
            </li>
        </ul>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane" id="listproducts">
                <div class="card-header card-header-success">
                    <h4 class="card-title ">
                        <a class="btn btn-sm btn-success pull-right" href="{{ route('products.create')}}" title="Agregar producto">
                            <i class="fa fa-plus-square">
                            </i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="{{ url('/productspdf') }}" title="Exportar a pdf">
                            <i class="far fa-file-pdf">
                            </i>
                        </a>
                        <a class="btn btn-sm btn-success" href="{{ url('/productsexcel') }}" title="Exportar a excel">
                            <i class="far fa-file-excel">
                            </i>
                        </a>
                    </h4>
                </div>
                <!-- Post -->
                <div class="post">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Codigo
                                </th>
                                <th class="text-center">
                                    Marca
                                </th>
                                <th class="text-center">
                                    Descripción
                                </th>
                                <th class="text-center">
                                    Precio u
                                </th>
                                <th class="text-center">
                                    Precio v
                                </th>
                                <th class="text-center">
                                    Cantidad
                                </th>
                                <th class="text-center" colspan="3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        @foreach($products as $product)
                        <tr>
                            <td class="text-center">
                                {{ $product->code }}
                            </td>
                            <td class="text-center">
                                {{ $product->name }}
                            </td>
                            <td class="text-center">
                                {{ $product->description }}
                            </td>
                            <td class="text-center">
                                {{ $product->unit_price }}
                            </td>
                            <td class="text-center">
                                {{ $product->sale_price }}
                            </td>
                            <td class="text-center">
                                {{ $product->quantity }}
                            </td>
                            <td>
                                <a class="btn btn-secundary btn-sm " href="{{ route('products.show', $product->id)}}" title="Ver Usuario">
                                    <i aria-hidden="true" class="fa fa-eye">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ route('products.edit', $product->id) }}">
                                    <i aria-hidden="true" class="far fa-edit " title="Editar producto">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" title="Eliminar producto" type="submit">
                                                <i aria-hidden="true" class="far fa-trash-alt">
                                                </i>
                                            </button>
                                        </input>
                                    </input>
                                </form>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                    <div class="text-center">
                        {!!$products->render() !!}
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="search">
                <table class="table table-striped table-hover" id="products">
                    <thead>
                        <tr>
                            <th>
                                Codigo
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Descripción
                            </th>
                            <th>
                                Precio unitario
                            </th>
                            <th>
                                Precio venta
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Stockmin
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
@endsection
