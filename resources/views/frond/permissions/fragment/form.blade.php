<form class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}

      <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <input type="text" required class="form-control"  placeholder="Ej: crear, editar, ver, eliminar" id="namepermission" name="namepermission" title="Nombre del rol">

          </div>
      </div>
  </div>
   <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <input type="text" id="display_namepermission" required class="form-control" placeholder="Ej: crear roles" name="display_namepermission" title="Apodo">
          </div>
      </div>
  </div>
  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

            <input  id="descriptionpermission" type="text" required class="form-control" placeholder="El permiso: podrá crear,editar,ver,eliminar." name="descriptionpermission" title="Descripción">

          </div>
      </div>
  </div>

   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='Registrar', $attributes =['id'=>'Registropermission','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
  </div>
</form>
