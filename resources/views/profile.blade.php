@extends('templates.content')

@section('content')


<div class="row col-xs-12">
	
	  <div class="smallpad">
	  <a class="btn btn-success btn-xs" href="{{ route('entry.index')}}" role="button"><span class="glyphicon glyphicon-list-alt"></span> View body list</a>
	  <h3>Deceased Profile</h3>
	  <hr>

	  </div>
</div>

<div class="row">
	<div class=" col-lg-12">
	  <div class="bigpad col-lg-6">
	  <h3><span class="glyphicon glyphicon-user" aria-hidden="true" style="color:#f6290c; font-size:30px;"></span> Identity information</h3>
	  <hr>
	  <h4>Name: {{ $entry->first_name}} {{ $entry->last_name}}</h4>
	  <h4>ID: {{ $entry->death_id}}</h4>
	  <h4>Sex: {{ $entry->sex}}</h4>
	  <h4>Age: {{ $entry->age}} years</h4>

	  </div>
	  <div class="bigpad col-lg-5">
	  <h3><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:#CE6D39; font-size:30px;"></span> Home and Contact</h3>
	  <hr>
	   <h4>Nationality: Zimbabwean</h4>
	  <h4>Address: {{ $entry->address}}</h4>
	  <h4>Call:+263773235687</h4>
	  <h4>Kin: {{ $entry->kin}}</h4>
	 
	</div>  
</div>


<div class="row">
	<div class=" col-lg-12">
	  <div class="bigpad col-lg-6">
	  <h3><span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:#011638; font-size:30px;"></span> Health Record</h3>
	  <hr>
	  <h4>Illness: {{ $entry->illness}}</h4>
	  <h4>Period: {{ $entry->duration}} years</h4>
	  <h4>Medication: {{ $entry->medication}}</h4>
	  <h4>Death Cause: {{ $entry->death_cause}}</h4>
	  <hr>
	   <h4>Post mortem results</h4>
	   <p>{{ $entry->post_mortem}}</p>
	   <hr>
	   <h4>Note:This information is for internal use only</h4>


	  </div>
	  <div class="bigpad col-lg-5">
	  <h3><span class="glyphicon glyphicon-usd" aria-hidden="true" style="color:#C89EC4; font-size:30px;"></span> Bills and Insurance</h3>
	  <hr>
	   <h4>Insurance</h4>
	   <hr>
	  <h4>Medical cover : {{ $entry->medical}}</h4>
	  <h4>Funeral cover: {{ $entry->funeral}}</h4>
	  <hr>
	  <h4>Bills</h4>
	  <hr>
	  <h4>Hospital bill: {{ $entry->hospital}}</h4>
	  <h4>Mortuary bill: {{ $entry->mortuary}}</h4>

	 
	</div>  
</div>
<div class="row col-xs-12">
	<div class=" col-lg-12">
	  <div class="smallpad">
	  <img src="{{ URL::to('/') }}/images/health.jpg"><h4>Copyright &#169; Ministry of Health And Child Welfare</h4>

       </div>
	
	  </div>
</div>






@stop