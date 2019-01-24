@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER COMENTARIO.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('commentaries.index')}}" title="Listado de todos los comentarioss.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>
                            Nombres y apellidos:
                        </b>
                        {{ $commentary->name}}
                    </p>
                    <p>
                        <b>
                            Email:
                        </b>
                        {{ $commentary->email}}
                    </p>
                    <p>
                        <b>
                            Descripción:
                        </b>
                        {{ $commentary->body}}
                    </p>
                    <p>
                        <b>
                            Fecha de creación:
                        </b>
                        {{ date('d M Y', strtotime( $commentary->created_at))}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
