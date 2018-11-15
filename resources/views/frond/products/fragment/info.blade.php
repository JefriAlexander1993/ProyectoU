@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show">
<i class="fa fa-info-circle" aria-hidden="true"></i>
<button type="button" class="close" data-dismiss="alert">
&times;
</button>
{{Session::get('info')}}
</div>
@endif