<div class="row">
    <div class="col-sm-6">
        <div class="form-group ">
            {!! Form::label('name','Nombre(*).')!!}
    {!!Form::text('name',null,['class'=>'form-control','Nombre del usuario','title'=>'Nombre.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group ">
            {!! Form::label('email','Email(*).')!!}
    {!!Form::email('email',null,['class'=>'form-control','Nombre del usuario','title'=>'Correo electronico.','id'=>'name','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {!! Form::label('password','Contraseña(*).')!!}
            <input class="form-control" id="password" name="password" required="" type="password">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>
                        {{ $errors->first('password') }}
                    </strong>
                </span>
                @endif
            </input>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('password-confirm','Confirmar contraseña(*).')!!}
            <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
            </input>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ Form::label('file', 'Imagén') }}
            <br>
                {{Form::file('file',['class'=>'form-control'])}}
            </br>
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
