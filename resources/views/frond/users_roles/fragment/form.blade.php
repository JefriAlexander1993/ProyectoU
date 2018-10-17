
<form class="form-horizontal" method="POST" action="">

  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

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

   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='Registrar', $attributes =['id'=>'Registroroleuser','name'=>'Registroroleuser','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
  </div>
</form>
