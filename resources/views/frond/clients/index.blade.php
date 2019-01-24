@extends('layouts.plantilla')

@section('content')
<br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">
                    <strong>
                        LISTA DE CLIENTES
                    </strong>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('clients.create')}}" title="Agregar clientes">
                        <i class="fa fa-plus-square">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ url('/clientspdf') }}" title="Exportar a pdf">
                        <i class="far fa-file-pdf">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-success" href="{{ url('/clientssesexcel') }}" title="Exportar a excel">
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
                                    Nuip
                                </th>
                                <th class="text-center">
                                    Nombre
                                </th>
                                <th class="text-center">
                                    Teléfono
                                </th>
                                <th class="text-center">
                                    Dirección
                                </th>
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center" colspan="3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        @foreach($clients as $client)
                        <tr>
                            <td class="text-center">
                                {{ $client->nuip }}
                            </td>
                            <td class="text-center">
                                {{ $client->name }}
                            </td>
                            <td class="text-center">
                                {{ $client->phone }}
                            </td>
                            <td class="text-center">
                                {{ $client->address }}
                            </td>
                            <td class="text-center">
                                {{ $client->email }}
                            </td>
                            <td>
                                <a class="btn btn-secundary btn-sm " href="{{ route('clients.show', $client->id)}}" title="Ver Usuario">
                                    <i aria-hidden="true" class="fa fa-eye">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ route('clients.edit', $client->id) }}">
                                    <i aria-hidden="true" class="far fa-edit " title="Editar cliento">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                    <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" title="Eliminar clientw" type="submit">
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
                        {!!$clients->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
@endsection
