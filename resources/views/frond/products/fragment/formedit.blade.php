<form name="formproductedit"  id="formproductedit"  method="POST" enctype="multipart/form-data">    
  {{csrf_field()}}

<input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
<input type="hidden" name="_method" value="PUT" >

  <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
              <label class="bmd-label-floating"><strong>Codigo</strong></label>
            <input type="text" placeholder="Ej:123245" required class="form-control" value="" id="codeproductedit" name="code" title="Codigo del producto">
           </div>
        </div>
          <div class="col-sm-6">
               <div class="form-group">
                     <label class="bmd-label-floating"><strong>Fecha</strong></label>
                     <input type="date" placeholder="Ej:13/07/1993" required class="form-control" id="dateproductedit" name="date" title="Fecha de la compra del producto">
               </div>
         </div>

</div>

  <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                  <label class="bmd-label-floating"><strong>Stockmin</strong></label>
                  <input type="number" placeholder="1" required min="1" class="form-control" id="stockminedit" name="stockmin" title="Cantidad minima del producto">
            </div>
      </div>
      <div class="col-sm-8">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Nombre</strong></label>
          <input type="select" placeholder="Ej:Televisión" required class="form-control" id="nameproductedit" name="name" title=" Nombre del producto">
        </div>
    </div>
  </div>

  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            <label class="bmd-label-floating"><strong>Descripción</strong></label>
            <textarea cols="50" placeholder="Ej:Su color es azul, está elaborado en carbono" required class="form-control" id="descriptionproductedit" name="description" title="Descripción del producto">
            </textarea>

          </div>
      </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
    <div class="file_input_div">
        <div class="file_input">
          {!!Form::label('file','Imagen')!!}
          {!!Form::file('file',['class'=>'form-control']) !!}
      

      
        </div>

      </div>
</div>
</div>
  <div class="row">
 
      <div class="col-sm-6">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio unitario</strong></label>
          <input type="number" placeholder="Ej:1500" required class="form-control" id="unit_priceedit" name="unit_price" title="Precio unitario">
        </div>
      </div>
      <div class="col-sm-6">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio venta</strong></label>
          <input type="number" placeholder="Ej:1800" required class="form-control" id="sale_priceedit" name="sale_price" title="Precio unitario">
        </div>
      </div>
  </div>
   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!!link_to('#',$title='Actualizar', $attributes =['id'=>'Actualizarproduct','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
</div>
</form>