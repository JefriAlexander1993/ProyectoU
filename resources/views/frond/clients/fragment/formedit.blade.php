<form id="formclient" class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
              <label class="bmd-label-floating"><strong>Nuip</strong></label>
            <input type="text" required class="form-control" id="nuipedit" name="nuipedit" title="Numero de identificación">
            </div>
      </div>
   </div>

  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Nombre</strong></label>
          <input type="text" id="nameclientedit" required class="form-control"  name="nameclientedit" title="Nombre del cliente">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Teléfono</strong></label>
          <input type="text" id="phoneclientedit" required class="form-control"  name="phoneclientedit" title="Nombre del cliente">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Dirección</strong></label>
          <input type="text" id="addressclientedit" required class="form-control"  name="addressclientedit" title="Nombre del cliente">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>
  <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Email</strong></label>
          <input type="text" id="emailclientedit" required class="form-control"  name="emailclientedit" title="Correo del cliente">
              <i class="mdi mdi-check-circle-outline"></i>

        </div>
    </div>
  </div>




  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          {!!link_to('#',$title='actualizar', $attributes =['id'=>'Actualizarclient','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}
          <!--<button type="submit" class="btn btn-success submit-btn btn-block"><i class="far fa-save"></i></button>-->
      </div>
    </div>
  </div>

  <div class="clearfix"></div><!--Incluyo el formulario-->
</form>
