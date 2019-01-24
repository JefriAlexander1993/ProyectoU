<div class="row">
    <div class="col-sm-4">
        <div class="form-group ">
            {!! Form::label('name','Nombre(*).')!!}
    {!!Form::text('name',null,['class'=>'form-control','Nombre del usuario','title'=>'Nombre.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!!Form::label('last_name','Apellidos(*).')!!}
    {!!Form::text('last_name',null,['class'=>'form-control','title'=>'Apellidos.','id'=>'lastname'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!!Form::label('gender','Genero.')!!}
    {!!Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class'=>'form-control','placeholder' => 'Elige tu sexo...'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group ">
            {!!Form::label('nuip','Cédula(*).')!!}
       {!!Form::text('nuip',null,['class'=>'form-control','title'=>'Cédula.'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group ">
            {!! Form::label('email','Email(*).')!!}
      {!!Form::email('email',null,['class'=>'form-control','Nombre del usuario','title'=>'Correo electronico.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group ">
            {!!Form::label('phone','Teléfono(*).')!!}
    {!!Form::text('phone',null,['class'=>'form-control','title'=>'Teléfono.','id'=>'phone'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('file', 'Imagén') }}
            <br>
                {{Form::file('file',['class'=>'form-control'])}}
            </br>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group ">
            {!! Form::label('address','Dirección.')!!}
    {!!Form::text('address',null,['class'=>'form-control','title'=>'Dirección.','id'=>'address','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group ">
            {!!Form::label('date_birth','Fecha de cumpleaños(*).')!!}
    {!!Form::date('date_birth',null,['class'=>'form-control','title'=>'Fecha de cumpleaños.','id'=>'date_birth'])!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
