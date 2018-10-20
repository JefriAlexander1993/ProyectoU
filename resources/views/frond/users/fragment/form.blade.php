
<form id="formuser" class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              <label class="bmd-label-floating"><strong>Nombres</strong></label>
            <input type="text" required class="form-control" maxlength="20" id="idname" name="idname" title="Nombre del usuario">
            </div>
      </div>
   </div>

  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Email</strong></label>
          <input type="email" id="idemail" required class="form-control"  name="idemail" title="Correo electronico">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
       <label class="bmd-label-floating"><strong>Constraseña</strong></label>
        <input  id="idpassword" name="idpassword" type="password" required class="form-control"  name="password" title="Contraseña">
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          {!!link_to('#',$title='Registrar', $attributes =['id'=>'Registro','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}
          <!--<button type="submit" class="btn btn-success submit-btn btn-block"><i class="far fa-save"></i></button>-->
      </div>
    </div>
  </div>

  <div class="clearfix"></div><!--Incluyo el formulario-->
</form>
