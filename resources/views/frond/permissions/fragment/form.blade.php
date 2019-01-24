<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('name','Nombre')!!}
                {!!Form::text('name',null,['class'=>'form-control','title'=>'Nombre del permiso.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('display_name','Apodo(*).')!!}
                {!!Form::text('display_name',null,['class'=>'form-control','title'=>'Apodo del permiso.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group ">
            {!!Form::label('description','Descripción(*).')!!}
       {!!Form::textarea('description',null,['class'=>'form-control', 'rows'=>"4",'title'=>'Descripción del permiso.'])!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
