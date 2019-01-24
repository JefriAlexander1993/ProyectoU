@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER ROL.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('roles.index')}}" title="Listado de todos los roles.">
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
                        {{ $role->name}}
                    </p>
                    <p>
                        <b>
                            Apodo:
                        </b>
                        {{ $role->display_name}}
                    </p>
                    <p>
                        <b>
                            Descripción:
                        </b>
                        {{ $role->description}}
                    </p>
                    <p>
                        <b>
                            Fecha de creación:
                        </b>
                        {{ date('d M Y', strtotime( $role->created_at))}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
