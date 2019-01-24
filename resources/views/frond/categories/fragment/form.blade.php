<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            {!! Form::label('name','Nombre de categoria(*).')!!}
    {!!Form::text('name',null,['class'=>'form-control','Nombre del usuario','title'=>'Nombre.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            {!!Form::label('characteristics','Descripción.')!!}
       {!!Form::textarea('characteristics',null,['class'=>'form-control','title'=>'Mensaje.', 'rows'=>"4" ])!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
