@extends('layouts.plantilla')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title ">
                <strong>
                    LISTA DE CATEGORIAS
                </strong>
                <a class="btn btn-success btn-sm pull-right" href="{{ route('categories.create')}}" title="Agregar categorias">
                    <i class="fa fa-plus-square">
                    </i>
                </a>
                <a class="btn btn-sm btn-danger" href="{{ url('/categorypdf') }}" title="Exportar a pdf">
                    <i class="far fa-file-pdf">
                    </i>
                </a>
                <a class="btn btn-sm btn-success" href="{{ url('/categoryexcel') }}" title="Exportar a excel">
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
                                Nombre
                            </th>
                            <th class="text-center">
                                Cateristica
                            </th>
                            <th class="text-center" colspan="3">
                                Acción
                            </th>
                        </tr>
                    </thead>
                    @foreach($categories as $category)
                    <tr>
                        <td class="text-center">
                            {{ $category->id }}
                        </td>
                        <td class="text-center">
                            {{ $category->name }}
                        </td>
                        <td class="text-center">
                            {{ $category->characteristics }}
                        </td>
                        <td>
                            <a class="btn btn-secundary btn-sm " href="{{ route('categories.show', $category->id)}}" title="Ver Usuario">
                                <i aria-hidden="true" class="fa fa-eye">
                                </i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-default btn-sm" href="{{ route('categories.edit', $category->id) }}">
                                <i aria-hidden="true" class="far fa-edit " title="Editar commentaryo">
                                </i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
            </div>
        </div>
    </div>
</div>
@endsection
