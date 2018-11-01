@if(count($errors))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">
&times;
</button>
<ul>
@foreach($errors->all() as $error)<!--Recorrer el error--><!--Todos los errores paselo de uno a uno a la variable error-->
<li>{{$error}}<li>

@endforeach
</ul>
</div>
@endif 