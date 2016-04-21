@extends('templates.content')

@section('content')
<div class="row col-xs-12">
	<div class=" col-lg-4 piece">
	  <div class="pad">
	  <a href="{{ route('reg.data')}}"><span class="glyphicon glyphicon-edit" aria-hidden="true" style="color:#f6290c; font-size:45px;"></span><h3>Register body</h3></a>
	
	  </div>
	</div>

	<div class="col-lg-4 piece">
	<div class="pad">
		<a href="{{ route('entry.index')}}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style=" color:orange; font-size:45px;"></span><h3>Body list</h3></a>
	  </div>
	</div>

	@can('overall_control')

	<div class="col-lg-4 piece">
	<div class="pad">
		<a href="{{ route('auth.signup')}}"><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:brown; font-size:45px;"></span><h3>Manage users</h3></a>
	  </div>
	</div>
</div>
  @else

  <div class="col-lg-4 piece">
	<div class="pad">
		<a href="#"><span class="glyphicon glyphicon-dashboard" aria-hidden="true" style="color:brown; font-size:45px;"></span><h3>Nurse</h3></a>
	  </div>
	</div>
</div>

  @endcan

<div class="row col-xs-12">
	<div class=" col-lg-4 piece">
	  <div class="pad">
		<a href="{{ route('charts')}}"><span class="glyphicon glyphicon-stats" aria-hidden="true" style=" color:purple; font-size:45px;"></span><h3>Cohort Analysis</h3></a>
	  </div>
	</div>

	<div class="col-lg-4 piece">
	<div class="pad">
		<a href="#"><span class="glyphicon glyphicon-pushpin" aria-hidden="true" style="color:#75890c; font-size:45px;"></span><h3>Noticeboard</h3></a>
	  </div>
	</div>
	<div class="col-lg-4 piece">
	<div class="pad">
		<a href="#"><span class="glyphicon glyphicon-print" aria-hidden="true" style="color:orange; font-size:45px;"></span><h3>Printouts</h3></a>
	  </div>
	</div>
</div>

@stop