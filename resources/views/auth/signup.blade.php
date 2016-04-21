@extends('templates.content')

@section('content')
<div class="row col-lg-8">
   <div class="panel panel-default">
  <div class="panel-heading ">
    <h3 class="panel-title">Register Staff</h3>
  </div>
  <div class="panel-body">
    <div class="col-md-10 col-lg-7 col-xs-12">
   
        <form class="form-vertical" role="form" method="post" action="{{ route('auth.signup')}}">
         <p>Only medical staff to be registered</p>


            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Name" value="{{ Request::old('first_name') ?: '' }}">
               @if ($errors->has('first_name'))
              <span class="help-block">{{ $errors->first('first_name') }}</span>
            @endif
            </div>

             
            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                
             <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Surname" value="{{ Request::old('last_name') ?: '' }}">
               @if ($errors->has('last_name'))
              <span class="help-block">{{ $errors->first('last_name') }}</span>
            @endif
            </div>


            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                
                
              <input type="text" name="title" class="form-control" id="title" placeholder="Title: Dr/Sr" value="{{ Request::old('title') ?: '' }}">
               @if ($errors->has('title'))
              <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
             
                <input type="text" name="email" class="form-control" id="email" placeholder="Email address" value="{{ Request::old('email') ?: '' }}">
                 @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                
                
              <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ Request::old('username') ?: '' }}">
               @if ($errors->has('username'))
              <span class="help-block">{{ $errors->first('username') }}</span>
            @endif
            </div>
            
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                
                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                 @if ($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Staff Register</button>
            </div>
            <p>Only Authorised personell can register staff</p>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
  </div>
</div>


</div>
@stop