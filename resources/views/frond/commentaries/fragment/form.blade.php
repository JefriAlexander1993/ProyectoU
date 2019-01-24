<div class="row">
    <div class="col-sm-4">
        <div class="form-group ">
            {!! Form::label('name','Nombres y apellidos(*).')!!}
    {!!Form::text('name',null,['class'=>'form-control','Nombre del usuario','title'=>'Nombre.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!!Form::label('email','Correo(*).')!!}
    {!!Form::email('email',null,['class'=>'form-control','title'=>'Apellidos.','id'=>'lastname'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!!Form::label('affair','Asunto.')!!}
    {!!Form::text('affair', null, ['class'=>'form-control','placeholder' => 'Cotización...'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            {!!Form::label('body','Mensaje(*).')!!}
       {!!Form::textarea('body',null,['class'=>'form-control','title'=>'Mensaje.', 'rows'=>"4" ])!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
