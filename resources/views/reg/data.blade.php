@extends('templates.content')

@section('content')
<div class="row">
  <a class="btn btn-success btn-xs" href="{{ route('entry.index')}}" role="button"><span class="glyphicon glyphicon-list-alt"></span> View body list</a>
</div>
<div class="row">
   <div class="panel panel-default">
  <div class="panel-heading ">
    <h3 class="panel-title">Register Deceased Body</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-10 col-lg-7 col-xs-12">
   
        <form class="form-vertical" role="form" method="post" action="{{ route('reg.data')}}">
         <h3>Deceased Details</h3>
         <hr>

             <div class="row">
            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-lg-5">
                
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Name" value="{{ Request::old('first_name') ?: '' }}">
               @if ($errors->has('first_name'))
              <span class="help-block">{{ $errors->first('first_name') }}</span>
            @endif
            </div>

             
            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-lg-5">
                
             <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Surname" value="{{ Request::old('last_name') ?: '' }}">
               @if ($errors->has('last_name'))
              <span class="help-block">{{ $errors->first('last_name') }}</span>
            @endif
            </div>
            </div>
            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                
              <input type="text" name="age" class="form-control" id="age" placeholder="Age" value="{{ Request::old('age') ?: '' }}">
               @if ($errors->has('age'))
              <span class="help-block">{{ $errors->first('age') }}</span>
            @endif
            </div>
             <div class="row">
             <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }} col-lg-6">
                
             <label for="dob" class="control-label">Date of birth</label>   
              <input type="date" name="dob" class="form-control" id="dob" placeholder="Date of Birth" value="{{ Request::old('dob') ?: '' }}">
               @if ($errors->has('dob'))
              <span class="help-block">{{ $errors->first('dob') }}</span>
            @endif
            </div>

             <div class="form-group{{ $errors->has('dod') ? ' has-error' : '' }} col-lg-6">
                
               <label for="dod" class="control-label">Date of death</label>  
              <input type="date" name="dod" class="form-control" id="dod" placeholder="Date of Death" value="{{ Request::old('dod') ?: '' }}">
               @if ($errors->has('dod'))
              <span class="help-block">{{ $errors->first('dod') }}</span>
            @endif
            </div>
            </div>
            
             <div class="row">
            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }} col-lg-6">
                
                
              <input type="text" name="sex" class="form-control" id="sex" placeholder="Sex: Male/Female" value="{{ Request::old('sex') ?: '' }}">
               @if ($errors->has('sex'))
              <span class="help-block">{{ $errors->first('sex') }}</span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('death_id') ? ' has-error' : '' }} col-lg-4">
             
                <input type="text" name="death_id" class="form-control" id="death_id" placeholder="ID:ie NB2356GF" value="{{ Request::old('death_id') ?: '' }}">
                 @if ($errors->has('death_id'))
              <span class="help-block">{{ $errors->first('death_id') }}</span>
            @endif
            </div>
            </div>

            <div class="form-group{{ $errors->has('kin') ? ' has-error' : '' }}">
                
                
              <input type="text" name="kin" class="form-control" id="kin" placeholder="Next of kin" value="{{ Request::old('kin') ?: '' }}">
               @if ($errors->has('kin'))
              <span class="help-block">{{ $errors->first('kin') }}</span>
            @endif
            </div>
            
             <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                
                
              <input type="text" name="address" class="form-control" id="address" placeholder="Physical address" value="{{ Request::old('address') ?: '' }}">
               @if ($errors->has('address'))
              <span class="help-block">{{ $errors->first('address') }}</span>
            @endif
            </div>
            <h3>Medical and Funeral Cover</h3>
         <hr>
         <div class="form-group{{ $errors->has('medical') ? ' has-error' : '' }}">
                
                
              <input type="text" name="medical" class="form-control" id="medical" placeholder="Medical Cover" value="{{ Request::old('medical') ?: '' }}">
               @if ($errors->has('medical'))
              <span class="help-block">{{ $errors->first('medical') }}</span>
            @endif
            </div>
            
             <div class="form-group{{ $errors->has('funeral') ? ' has-error' : '' }}">
                
                
              <input type="text" name="funeral" class="form-control" id="funeral" placeholder="Funeral cover" value="{{ Request::old('funeral') ?: '' }}">
               @if ($errors->has('funeral'))
              <span class="help-block">{{ $errors->first('funeral') }}</span>
            @endif
            </div>
            <h3>Medical History</h3>
            <hr>
            <div class="row">
            <div class="form-group{{ $errors->has('illness') ? ' has-error' : '' }} col-lg-6">
                
              <input type="text" name="illness" class="form-control" id="illness" placeholder="Last known illness" value="{{ Request::old('illness') ?: '' }}">
               @if ($errors->has('illness'))
              <span class="help-block">{{ $errors->first('illness') }}</span>
            @endif
            </div>

             
            <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }} col-lg-5">
                
             <input type="text" name="duration" class="form-control" id="duration" placeholder="Duration" value="{{ Request::old('duration') ?: '' }}">
               @if ($errors->has('duration'))
              <span class="help-block">{{ $errors->first('duration') }}</span>
            @endif
            </div>
            </div>

             <div class="form-group{{ $errors->has('death_cause') ? ' has-error' : '' }}">
                
                
              <input type="text" name="death_cause" class="form-control" id="death_cause" placeholder="Cause of death" value="{{ Request::old('death_cause') ?: '' }}">
               @if ($errors->has('death_cause'))
              <span class="help-block">{{ $errors->first('death_cause') }}</span>
            @endif
            </div>
             
              <div class="form-group{{ $errors->has('medication') ? ' has-error' : '' }}">
                
                
              <input type="text" name="medication" class="form-control" id="medication" placeholder="Medication taken" value="{{ Request::old('medication') ?: '' }}">
               @if ($errors->has('medication'))
              <span class="help-block">{{ $errors->first('medication') }}</span>
            @endif
            </div>
             <div class="form-group{{ $errors->has('post_mortem') ? ' has-error': '' }}">
             <label for="post_mortem" class="control-label">Post mortem results</label>  
            <textarea type="text" name="post_mortem" class="form-control" rows="3" id="post_mortem" value="{{ Request::old('post_mortem') ?:''}}"></textarea>
                @if ($errors->has('post_mortem'))
                          <span class="help-block">{{ $errors->first('post_mortem')}}</span>
                        @endif
             </div>
             <h3>Bills</h3>
            <hr>
    <label for="hospitalbill" class="control-label">Hospital bill</label>         
  <div class="form-group{{ $errors->has('hospitalbill') ? ' has-error' : '' }}">
                
              <input type="text" name="hospitalbill" class="form-control" id="hospitalbill" placeholder="Amount:$" value="{{ Request::old('hospitalbill') ?: '' }}">
               @if ($errors->has('hospitalbill'))
              <span class="help-block">{{ $errors->first('hospitalbill') }}</span>
            @endif
            </div>

  <label for="mortuarybill" class="control-label">Mortuary charge</label>         
   <div class="form-group{{ $errors->has('mortuarybill') ? ' has-error' : '' }}">
                
              <input type="text" name="mortuarybill" class="form-control" id="mortuarybill" placeholder="Amount:$" value="{{ Request::old('mortuarybill') ?: '' }}">
               @if ($errors->has('mortuarybill'))
              <span class="help-block">{{ $errors->first('mortuarybill') }}</span>
            @endif
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Register</button>
            </div>
            <p>Only Authorised personell can register bodies</p>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
  </div>
</div>


</div>
@stop