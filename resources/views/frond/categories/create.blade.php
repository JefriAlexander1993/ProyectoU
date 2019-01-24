@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card card-default">
                <div class="card-header">
                    <h3>
                        <strong>
                            CREAR CATEGORIAS.
                        </strong>
                        <a class="btn btn-default pull-right btn-sm" href="{{ route('categories.index')}}" title="Listado de todos los comentarios.">
                            <i class="fa fa-list-ol">
                            </i>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route'=>'categories.store']) !!}

                      @include('frond.categories.fragment.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
