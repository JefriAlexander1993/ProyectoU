@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            EDITAR ROL.
                        </strong>
                        <a class="btn btn-default pull-right" href="{{ route('roles.index')}}" title="Listado de todos los comentarios.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],  'method' => 'PUT']) !!}
                        @include('frond.permissions.fragment.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
