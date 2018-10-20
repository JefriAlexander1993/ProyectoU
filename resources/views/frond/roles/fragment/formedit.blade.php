<form id="formroleupdate" name="formroleupdate" class="form-horizontal" method="POST" >
    <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}

      <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label class="bmd-label-floating"><strong>Nombre</strong></label>
            <input type="text" required class="form-control"  placeholder="Ej: admin, cliente, empleado" name="nameRoleEdit" id ="nameRoleEdit" title="Nombre del rol">

          </div>
      </div>
    </div>
   <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                    <label class="bmd-label-floating"><strong>Nombre para mostrar</strong></label>
            <input type="text" id="display_nameRoleEdit" required class="form-control" placeholder="Ej: admin_root" name="display_nameRoleEdit" title="Apodo">
          </div>
      </div>
  </div>
  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
        <label class="bmd-label-floating"><strong>Descripción</strong></label>
            <input  id="descriptionRoleEdit"   type="text" required class="form-control" placeholder="El rol admin: podrá crear,editar,ver,eliminar." name="description" title="Descripción">

          </div>
      </div>
  </div>

   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='actualizar', $attributes =['id'=>'ActualizarRole','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

    </div>
  </div>
</div>
</form>
