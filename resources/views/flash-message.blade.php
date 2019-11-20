@if ($message = Session::get('success'))
<div class="alert alert-success alert-block col-md-12" style="position: absolute; z-index: 100; left: 0px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block col-md-12" style="position: absolute; z-index: 100; left: 0px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block col-md-12" style="position: absolute; z-index: 100; left: 0px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block col-md-12" style="position: absolute; z-index: 100; left: 0px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger alert-block col-md-12" style="position: absolute; z-index: 100; left: 0px;">
	<button type="button" class="close" data-dismiss="alert"></button>	
	Ups, algo salió mal
</div>
@endif