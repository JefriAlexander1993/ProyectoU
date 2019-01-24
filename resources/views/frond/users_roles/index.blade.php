@extends('layouts.plantilla')

@section('content')
<br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">
                    <strong>
                        LISTA DE ROLES ASIGNADOS A USUARIOS
                    </strong>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('users_roles.create')}}" title="Agregar roles a usuarios">
                        <i class="fa fa-plus-square">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ url('/user_rolespdf') }}" title="Exportar a pdf">
                        <i class="far fa-file-pdf">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-success" href="{{ url('/user_rolesexcel') }}" title="Exportar a excel">
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
                                    Id usuario
                                </th>
                                <th class="text-center">
                                    Id rol
                                </th>
                                <th class="text-center" colspan="3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        @foreach($users_roles as $user_role)
                        <tr>
                            <td class="text-center">
                                {{ $user_role->user_id }}
                            </td>
                            <td class="text-center">
                                {{ $user_role->role_id }}
                            </td>
                            <td>
                                <a class="btn btn-secundary btn-sm " href="{{ route('users_roles.show', $permission_role->id)}}" title="Ver Usuario">
                                    <i aria-hidden="true" class="fa fa-eye">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ route('users_roles.edit', $permission_role->id) }}">
                                    <i aria-hidden="true" class="far fa-edit " title="Editar permissiono">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('users_roles.destroy', $permission_role->id) }}" method="post">
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
                        {!!$users_roles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
@endsection
