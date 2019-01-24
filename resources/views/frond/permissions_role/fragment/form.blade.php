<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!!Form::label('role_id','Usuario(*).')!!}
              {!!Form::select('role_id',$id_role1,null,['class'=>'form-control','id'=>'role_id1','title'=>'Elige el id de usuario.', 'required'=>'required','placeholder'=>'Seleccionar...'])!!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!!Form::label('permission_id ','Permiso(*).')!!}
             {!!Form::select('permission_id',$id_permission,null,['class'=>'form-control','id'=>'permission_id','title'=>'Elige el id de role.', 'required'=>'required','placeholder'=>'Seleccionar...']);!!}
        </div>
    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('
    <i aria-hidden="true" class="fa fa-save">
    </i>
    ', array('type' => 'submit', 'class'=>'btn btn-success btn-lg btn-block'))!!}
</div>
