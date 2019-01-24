@extends('layouts.plantilla')

@section('content')
<br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">
                    <strong>
                        LISTA DE PERMISOS ASIGNADOS A ROLES
                    </strong>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('permissions_roles.create')}}" title="Agregar permiso asignado a rol">
                        <i class="fa fa-plus-square">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ url('/permissions_rolepdf') }}" title="Exportar a pdf">
                        <i class="far fa-file-pdf">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-success" href="{{ url('/permissions_roleexcel') }}" title="Exportar a excel">
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
                                    Id permiso
                                </th>
                                <th class="text-center">
                                    Id rol
                                </th>
                                <th class="text-center" colspan="3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        @foreach($permissions_roles as $permission_role)
                        <tr>
                            <td class="text-center">
                                {{ $permission_role->permission_id }}
                            </td>
                            <td class="text-center">
                                {{ $permission_role->role_id }}
                            </td>
                            <td>
                                <a class="btn btn-secundary btn-sm " href="{{ route('permissions_roles.show', $permission_role->id)}}" title="Ver Usuario">
                                    <i aria-hidden="true" class="fa fa-eye">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ route('permissions_roles.edit', $permission_role->id) }}">
                                    <i aria-hidden="true" class="far fa-edit " title="Editar permissiono">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('permissions_roles.destroy', $permission_role->id) }}" method="post">
                                    <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" title="Eliminar asignación de permisos a roles" type="submit">
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
                        {!!$permissions_roles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
@endsection
