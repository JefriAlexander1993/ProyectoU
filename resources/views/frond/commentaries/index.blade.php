@extends('layouts.plantilla')

@section('content')
<br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">
                    <strong>
                        LISTA DE COMENTARIOS
                    </strong>
                    <a class="btn btn-success btn-sm pull-right" href="{{ route('commentaries.create')}}" title="Agregar commentario">
                        <i class="fa fa-plus-square">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ url('/commentarypdf') }}" title="Exportar a pdf">
                        <i class="far fa-file-pdf">
                        </i>
                    </a>
                    <a class="btn btn-sm btn-success" href="{{ url('/commentaryexcel') }}" title="Exportar a excel">
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
                                    Nombres y apellidos
                                </th>
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Descripción
                                </th>
                                <th class="text-center" colspan="3">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        @foreach($commentaries as $commentary)
                        <tr>
                            <td class="text-center">
                                {{ $commentary->name }}
                            </td>
                            <td class="text-center">
                                {{ $commentary->email }}
                            </td>
                            <td class="text-center">
                                {{ $commentary->body }}
                            </td>
                            <td>
                                <a class="btn btn-secundary btn-sm " href="{{ route('commentaries.show', $commentary->id)}}" title="Ver Usuario">
                                    <i aria-hidden="true" class="fa fa-eye">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-default btn-sm" href="{{ route('commentaries.edit', $commentary->id) }}">
                                    <i aria-hidden="true" class="far fa-edit " title="Editar commentaryo">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('commentaries.destroy', $commentary->id) }}" method="post">
                                    <input name="_method" type="hidden" value="DELETE">
                                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" title="Eliminar commentaryo" type="submit">
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
                        {!!$commentaries->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
@endsection
