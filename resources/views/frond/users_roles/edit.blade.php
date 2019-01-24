@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            EDITAR ROL ASIGNADO A USUARIO.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('users_roles.index')}}" title="Listado de todos los roles asignados a usuarios.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($user_roles, ['route' => ['permissions_roles.update', $user_roles->id],  'method' => 'PUT']) !!}
                        @include('frond.users_roles.fragment.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
