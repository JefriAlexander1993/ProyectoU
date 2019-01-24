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
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('permissions_roles.index')}}" title="Listado de todos los comentarioss.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <p>
                        <b>
                            Id permiso:
                        </b>
                        {{ $permissions_role->permission_id}}
                    </p>
                    <p>
                        <b>
                            Id rol:
                        </b>
                        {{ $permissions_role->role_id}}
                    </p>
                    <p>
                        <b>
                            Fecha de creación:
                        </b>
                        {{ date('d M Y', strtotime( $permissions_roles->created_at))}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
