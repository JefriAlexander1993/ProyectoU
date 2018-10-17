
<form class="form-horizontal" method="POST" action="">

  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

   <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              {!!Form::label('role_id','Role(*).')!!}
              {!!Form::select('role_id',$id_role1,null,['class'=>'form-control','id'=>'role_idedit','title'=>'Elige el id de usuario.', 'required'=>'required','placeholder'=>'Seleccionar...'])!!}

          </div>
      </div>
  </div>
  <div class="row">
       <div class="col-sm-12">
           <div class="form-group">
             {!!Form::label('permission_id ','Permiso(*).')!!}
             {!!Form::select('permission_id',$id_permission,null,['class'=>'form-control','id'=>'permission_idedit','title'=>'Elige el id de role.', 'required'=>'required','placeholder'=>'Seleccionar...']);!!}
         </div>
     </div>
 </div>

   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='actualizar', $attributes =['id'=>'Actualizarasignacionpermission','name'=>'Actualizarasignacionpermission','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
  </div>
</form>
