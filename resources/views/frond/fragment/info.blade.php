@if(Session::has('info'))
<div class="alert alert-success alert-dismissible" id="success">
    <button class="close" data-dismiss="alert" id="btn-success" type="button">
        ×
    </button>
    <h4>
        <i class="fa fa-check">
        </i>
        Aviso!
    </h4>
    {{ Session::get('info') }}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger alert-dismissible" id="delete">
    <button class="close" data-dismiss="alert" id="btn-delete" type="button">
        ×
    </button>
    <h4>
        <i class=" fa fa-ban">
        </i>
        Aviso!
    </h4>
    {{ Session::get('danger') }}
</div>
@endif
