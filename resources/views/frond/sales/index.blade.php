@extends('layouts.plantilla')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#activity">
                        Lista de ventas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings">
                        Busqueda
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="activity">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title ">
                                    <a class="btn btn-sm btn-success pull-right" href="{{ route('products.create')}}" title="Agregar producto">
                                        <i class="fa fa-plus-square">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('/salespdf') }}" title="Exportar a pdf">
                                        <i class="far fa-file-pdf">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ url('/salesexcel') }}" title="Exportar a excel">
                                        <i class="far fa-file-excel">
                                        </i>
                                    </a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Id
                                                </th>
                                                <th class="text-center">
                                                    Total de venta
                                                </th>
                                                <th class="text-center">
                                                    Fecha de creación
                                                </th>
                                                <th class="text-center" colspan="3">
                                                    Acción
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td class="text-center">
                                                {{ $sale->id }}
                                            </td>
                                            <td class="text-center">
                                                {{ $sale->totalsale }}
                                            </td>
                                            <td class="text-center">
                                                {{ $sale->created_at }}
                                            </td>
                                            <td>
                                                <a class="btn btn-secundary btn-sm " href="{{ route('sales.show', $sale->id)}}" title="Ver venta">
                                                    <i aria-hidden="true" class="fa fa-eye">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-sm" href="{{ route('sales.edit', $sale->id) }}">
                                                    <i aria-hidden="true" class="far fa-edit " title="Editar venta">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('sales.destroy', $sale->id) }}" method="post">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                            <button class="btn btn-danger btn-sm" title="Eliminar venta" type="submit">
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
                                        {!!$sales->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-striped table-hover" id="sales" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Id
                                            </th>
                                            <th>
                                                Total de venta
                                            </th>
                                            <th>
                                                Fecha de creación
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------>
@endsection
