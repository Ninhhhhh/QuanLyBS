@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        x
    </button>
    <h4><i class="icon fa fa-ban">Error!</i> {{Session::get('error')}}
    </h4>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        x
    </button>
    <h4><i class="icon fa fa-ban">Success!</i> {{Session::get('error')}}
</div>
@endif