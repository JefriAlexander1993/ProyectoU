@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<i class="fa fa-danger-circle" aria-hidden="true"></i>
<button type="button" class="close" data-dismiss="alert">
&times;
</button>
{{Session::get('error')}}
</div>
@endif