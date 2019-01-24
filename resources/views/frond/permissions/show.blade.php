@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER PERMISO.
                        </strong>
                        <a class="btn btn-default btn-smpull-right" href="{{ route('permissions.index')}}" title="Listado de todos los permisos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>
                            Nombre:
                        </b>
                        {{ $permission->name}}
                    </p>
                    <p>
                        <b>
                            Apodo:
                        </b>
                        {{ $permission->display_name}}
                    </p>
                    <p>
                        <b>
                            Descripción:
                        </b>
                        {{ $permission->description}}
                    </p>
                    <p>
                        <b>
                            Fecha de creación:
                        </b>
                        {{ date('d M Y', strtotime( $permission->created_at))}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
