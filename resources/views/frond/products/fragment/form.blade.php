<form class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}
<!--'code', 'date','name','size','brand','quantity','iva','unit_price','sale_price','stockmin'-->
  <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
              <label class="bmd-label-floating"><strong>Codigo(*) </strong></label>
            <input type="text" placeholder="Ej:123245" required class="form-control" value="" id="codeproduct" name="codeproduct" title="Codigo del producto">
           </div> 
        </div>
          <div class="col-sm-6">
               <div class="form-group">
                     <label class="bmd-label-floating"><strong>Fecha(*)</strong></label>
                     <input type="date" placeholder="Ej:13/07/1993" required class="form-control" id="dateproduct" name="dateproduct" title="Fecha de la compra del producto">
               </div>
         </div>

</div>

  <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                  <label class="bmd-label-floating"><strong>Stockmin(*)</strong></label>
                  <input type="number" placeholder="1" required min="1" class="form-control" id="stockmin" name="stockmin" title="Cantidad minima del producto">
            </div>
      </div>
      <div class="col-sm-8">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Nombre(*)</strong></label>
          <input type="select" placeholder="Ej:Televisión" required class="form-control" id="nameproduct" name="nameproduct" title=" Nombre del producto">
        </div>
    </div>
  </div>

  <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label class="bmd-label-floating"><strong>Descripción</strong></label>
              {!!Form::textarea('descriptionproduct', null,['class'=>'form-control', 'id'=>'descriptionproduct', 'rows'=>'2','cols'=>'40','title'=>'Descripción del producto.','placeholder' => 'Ej: Color: azul, 4 ram.'])!!}
          </div>
        </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
    <div class="file_input_div">
        <div class="file_input">
          <label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
            <strong style="color:#000">Imagén</strong>
             <input id="file" name="file" class="none" type="file" placeholder="Imagén del producto" />
          </label>

        </div>

      </div>
</div>
</div>
  <div class="row">
      <div class="col-sm-4">
            <div class="form-group">
            <label class="bmd-label-floating"><strong>Iva(*)</strong></label>
            <input type="number" placeholder="Ej:15%" required class="form-control" id="ivaproduct" name="ivaproduct" title="Iva">
          </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio costo(*)</strong></label>
          <input type="number" placeholder="Ej:1500" required class="form-control" id="unit_price" name="unit_price" title="Precio unitario">
        </div>
      </div>
      <div class="col-sm-4">
          <div class="form-group">
          <label class="bmd-label-floating"><strong>Precio venta(*)</strong></label>
          <input type="number" placeholder="Ej:1800" required class="form-control" id="sale_price" name="sale_price" title="Precio unitario">
        </div>
      </div>
  </div>


   <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
          {!!link_to('#',$title='Registrar', $attributes =['id'=>'Registroproduct','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

        </div>
    </div>
  </div>
</form>
