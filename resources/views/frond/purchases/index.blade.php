@extends('layouts.plantilla')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#activity">
                        Lista de compras
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
                                    <a class="btn btn-default btn-sm" href="{{route('purchases.create')}}">
                                        <i class="fas fa-plus-square">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('/purchasespdf') }}" title="Exportar a pdf">
                                        <i class="far fa-file-pdf">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ url('/purchasesexcel') }}" title="Exportar a excel">
                                        <i class="far fa-file-excel">
                                        </i>
                                    </a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-hover">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th class="text-center">
                                                    # de compra
                                                </th>
                                                <th class="text-center">
                                                    Fecha de compra
                                                </th>
                                                <th class="text-center">
                                                    Total
                                                </th>
                                                <th class="text-center">
                                                    Acción
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($purchases as $purchase)
                                        <tr>
                                            <td class="text-center">
                                                {{ $purchase->id }}
                                            </td>
                                            <td class="text-center">
                                                {{ $purchase->created_at }}
                                            </td>
                                            <td class="text-center">
                                                {{ $purchase->totalpurchase}}
                                            </td>
                                            <td>
                                                <a class="btn btn-secundary btn-sm " href="{{ route('purchases.show', $purchase->id)}}" title="Ver Usuario">
                                                    <i aria-hidden="true" class="fa fa-eye">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-sm" href="{{ route('purchases.edit', $purchase->id) }}">
                                                    <i aria-hidden="true" class="far fa-edit " title="Editar purchaseo">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('purchases.destroy', $purchase->id) }}" method="post">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                            <button class="btn btn-danger btn-sm" title="Eliminar purchaseo" type="submit">
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
                                        {!!$purchases->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover" id="purchases" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            # de compra
                                        </th>
                                        <th class="text-center">
                                            Fecha de compra
                                        </th>
                                        <th class="text-center">
                                            Total
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------>
<!-- /.tab-pane -->
<!-- /.tab-content -->
<!-- /.card-body -->
<!-- /.nav-tabs-custom -->
@endsection
