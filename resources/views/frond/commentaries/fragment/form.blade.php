<form class="contact-form">
<input type="hidden" name="_token" value="{{csrf_token()}}" id="token"></input>

  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label class="bmd-label-floating"><strong>Nombre y apellidos</strong></label>
        <input type="text" id="namecomment" class="form-control">
      </div>
    </div>
  </div>
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label class="bmd-label-floating"><strong>Email</strong></label>
        <input type="email" id="emailcomment" class="form-control">
      </div>
    </div>
  </div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="exampleMessage" class="bmd-label-floating"><strong>Mesaje</strong></label>
      <textarea type="text" class="form-control" rows="4" id="bodycomment"></textarea>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-6 ml-auto mr-auto text-center">
        {!!link_to('#',$title='Enviar', $attributes =['id'=>'Registrocomment','class'=>'btn btn-success submit-btn btn-block','type'=>'submit'],$secure =null)!!}

    </div>
  </div>
</form>
