

<form id="formuserupdate" name="formuserupdate" class="form-horizontal" method="POST" >
  <input type="hidden" name="_method" value="DELETE">
           {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              <label class="bmd-label-floating">Nombres</label>
            <input type="text" required class="form-control" maxlength="20" id="name" name="name" title="Nombre del usuario">
            </div>
      </div>
   </div>

  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating">Email</label>
          <input type="email" id="email" required class="form-control"  name="email" title="Correo electronico">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
       <label class="bmd-label-floating">Constraseña</label>
        <input  id="password" type="password" required class="form-control"  name="password" title="Contraseña">
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
        {!!link_to('#',$title='actualizar', $attributes =['id'=>'Actualizar','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}
      </div>
    </div>
  </div>

  <div class="clearfix"></div><!--Incluyo el formulario-->
</form>
