<form id="formrole" class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

      <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="bmd-label-floating"><strong>Nombre(*)</strong></label>
            <input type="text" required class="form-control"  placeholder="Ej: admin, cliente, empleado" id="nameRole" name="nameRole" title="Nombre del rol">
          </div>
        </div>
      </div>
     <div class="row">
          <div class="col-sm-12">
              <div class="form-group">
                    <label class="bmd-label-floating"><strong>Nombre para mostrar</strong></label>
                <input type="text" id="display_nameRole" required class="form-control" placeholder="Ej: admin_root" name="display_nameRole" title="Apodo">
             </div>
          </div>
    </div>
    <div class="row">
          <div class="col-sm-12">
              <div class="form-group">
                      <label class="bmd-label-floating"><strong>Descripción(*)</strong></label>
              <input  id="descriptionRole" type="text" required class="form-control" placeholder="El rol admin: podrá crear,editar,ver,eliminar." name="descriptionRole" title="Descripción">
          </div>
        </div>
    </div>

   <div class="row">
      <div class="col-sm-12">
          <div class="form-group">
            {!!link_to('#',$title='Registrar', $attributes =['id'=>'RegistroRole','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}
        </div>
      </div>
   </div>
  <div class="clearfix"></div>
</form>
