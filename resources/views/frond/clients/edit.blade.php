@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            EDITAR CLIENTE.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('clients.index')}}" title="Listado de todos los clientes.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($client, ['route' => ['clients.update', $client->id], 'files' => true, 'method' => 'PUT']) !!}
                        @include('frond.clients.fragment.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
