@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            EDITAR PERMISOS.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('permissions.index')}}" title="Listado de todos los permisos.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::model($permission, ['route' => ['commentaries.update', $permission->id],  'method' => 'PUT']) !!}
                        @include('frond.permissions.fragment.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
