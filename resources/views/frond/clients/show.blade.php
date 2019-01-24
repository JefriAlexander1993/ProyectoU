@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER CLIENTE.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('clients.index')}}" title="Listado de todos los clientes.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>
                            NÚIP:
                        </b>
                        {{ $client->nuip}}
                    </p>
                    <p>
                        <b>
                            Nombre:
                        </b>
                        {{ $client->name}}
                    </p>
                    <p>
                        <b>
                            Precio unitario:
                        </b>
                        {{ $client->phone}}
                    </p>
                    <p>
                        <b>
                            Precio venta:
                        </b>
                        {{ $client->address}}
                    </p>
                    <p>
                        <b>
                            Descripción:
                        </b>
                        {{ $client->email}}
                    </p>
                    <p>
                        <b>
                            Fecha de creación:
                        </b>
                        {{ date('d M Y', strtotime( $client->created_at))}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
