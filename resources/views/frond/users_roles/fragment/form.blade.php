<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!!Form::label('user_id','Usuario(*).')!!}
              {!!Form::select('user_id',$id_user,null,['class'=>'form-control','title'=>'Elige el id de usuario.', 'required'=>'required','placeholder'=>'Seleccionar...'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!!Form::label('role_id ','Role(*).')!!}
             {!!Form::select('role_id',$id_role,null,['class'=>'form-control','id'=>'role_id','title'=>'Elige el id de role.', 'required'=>'required','placeholder'=>'Seleccionar...']);!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
