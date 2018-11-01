@if(Session::has('info'))
<div class="alert alert-info">
<i class="fa fa-info-circle" aria-hidden="true"></i>
<button type="button" class="close" data-dismiss="alert">
&times;
</button>
{{Session::get('info')}}
</div>
@endif