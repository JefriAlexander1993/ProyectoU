<form class="form-horizontal" method="POST" action="{{ route('roles.store') }}">
                        {{ csrf_field() }}

      <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <input type="text" required class="form-control"  placeholder="Ej: crear, editar, ver, eliminar" id="name" name="namerole" title="Nombre del rol">

          </div>
      </div>
  </div>
   <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <input type="text" id="display_name" required class="form-control" placeholder="Ej: crear roles" name="display_name" title="Apodo">
          </div>
      </div>
  </div>
  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">

            <input  id="description" type="text" required class="form-control" placeholder="El permiso: podrá crear,editar,ver,eliminar." name="description" title="Descripción">

          </div>
      </div>
  </div>

   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <button type="submit" class="btn btn-success submit-btn btn-block"><i class="far fa-save"></i></button>
      </div>
    </div>
  </div>
</form>
