@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            VER USUARIO.
                        </strong>
                        <a class="btn btn-default btn-sm pull-right" href="{{ route('users.index')}}" title="Listado de todos los usuarios.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <img alt="card image cap" class="card-img-top " src="{{$user->file}}" style="height:100px;width:100px ">
                        <p>
                            <b>
                                Nuip:
                            </b>
                            {{ $user->nuip}}
                        </p>
                        <p>
                            <b>
                                Nombre:
                            </b>
                            {{ $user->name}}
                        </p>
                        <p>
                            <b>
                                Email:
                            </b>
                            {{ $user->email}}
                        </p>
                        <p>
                            <b>
                                Fecha de creación:
                            </b>
                            {{ date('d M Y', strtotime( $user->created_at))}}
                        </p>
                    </img>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
