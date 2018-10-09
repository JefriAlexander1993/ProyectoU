<form class="form-horizontal" method="POST" action="">
  <input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>
           {{ csrf_field() }}
<!--'code', 'date','name','size','brand','quantity','iva','unit_price','sale_price','stockmin'-->
  <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
            {!!Form::label('code','Ingrese un codigo')!!}
            {!!Form::text('code',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Ej: 123', 'id'=>'codeproduct', 'name'=>'codeproduct', 'title'=>"Codigo" ])!!}
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
