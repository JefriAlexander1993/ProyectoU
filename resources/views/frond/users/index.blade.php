@extends('layouts.plantilla')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#activity">
                        Lista de usuarios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings">
                        Busqueda avanzada
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="activity">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-success">
                                <h4 class="card-title ">
                                    <a class="btn btn-sm btn-success pull-right" href="{{ route('products.create')}}" title="Agregar producto">
                                        <i class="fa fa-plus-square">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('/userspdf') }}" title="Exportar a pdf">
                                        <i class="far fa-file-pdf">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ url('/usersexcel') }}" title="Exportar a excel">
                                        <i class="far fa-file-excel">
                                        </i>
                                    </a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Id
                                                </th>
                                                <th class="text-center">
                                                    Nombres
                                                </th>
                                                <th class="text-center">
                                                    Email
                                                </th>
                                                <th class="text-center" colspan="3">
                                                    Acción
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($users as $user)
                                        <tr>
                                            <td class="text-center">
                                                {{ $user->id }}
                                            </td>
                                            <td class="text-center">
                                                {{ $user->name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                <a class="btn btn-secundary btn-sm " href="{{ route('users.show', $user->id)}}" title="Ver Usuario">
                                                    <i aria-hidden="true" class="fa fa-eye">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-sm" href="{{ route('users.edit', $user->id) }}">
                                                    <i aria-hidden="true" class="far fa-edit " title="Editar usero">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                            <button class="btn btn-danger btn-sm" title="Eliminar usero" type="submit">
                                                                <i aria-hidden="true" class="far fa-trash-alt">
                                                                </i>
                                                            </button>
                                                        </input>
                                                    </input>
                                                </form>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </table>
                                    <div class="text-center">
                                        {!!$users->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <table class="table table-striped table-hover" id="users" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th class="text-center">
                                                Nombres
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------------------------>
    </div>
</div>
@endsection
