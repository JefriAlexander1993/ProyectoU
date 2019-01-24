@extends('layouts.plantilla')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#activity">
                        Lista de permisos
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
                                    <a class="btn btn-success btn-sm pull-right" href="{{ route('roles.create')}}" title="Agregar rol">
                                        <i class="fa fa-plus-square">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('/permissionspdf') }}" title="Exportar a pdf">
                                        <i class="far fa-file-pdf">
                                        </i>
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ url('/permissionsexcel') }}" title="Exportar a excel">
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
                                                    Nombres
                                                </th>
                                                <th class="text-center">
                                                    Apodo
                                                </th>
                                                <th class="text-center">
                                                    Descripción
                                                </th>
                                                <th class="text-center" colspan="3">
                                                    Acción
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach($permissions as $permission)
                                        <tr>
                                            <td class="text-center">
                                                {{ $permission->name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $permission->display_name }}
                                            </td>
                                            <td class="text-center">
                                                {{ $permission->description }}
                                            </td>
                                            <td>
                                                <a class="btn btn-secundary btn-sm " href="{{ route('permissions.show', $permission->id)}}" title="Ver Usuario">
                                                    <i aria-hidden="true" class="fa fa-eye">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-sm" href="{{ route('permissions.edit', $permission->id) }}">
                                                    <i aria-hidden="true" class="far fa-edit " title="Editar permissiono">
                                                    </i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                                            <button class="btn btn-danger btn-sm" title="Eliminar permissiono" type="submit">
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
                                        {!!$permissions->render() !!}
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
                                <table class="table table-striped table-hover" id="permissions" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                Id
                                            </th>
                                            <th class="text-center">
                                                Nombre
                                            </th>
                                            <th class="text-center">
                                                Apodo
                                            </th>
                                            <th class="text-center">
                                                Descripción
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
