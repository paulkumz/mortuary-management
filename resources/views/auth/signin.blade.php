@extends('templates.default')

@section('content')
<body>
<div class="padding ">
<h1 class="top-header"><img src="{{ URL::to('/') }}/images/health.jpg">Ministry Of Health And Child Care<img src="{{ URL::to('/') }}/images/zim.png"></h1>	
</div>
@include('templates.partials.alerts')
<div class="padding-bottom">
    <div class="row title-head">
    <h3 panel-title>Mortuary Management System</h3>	
    </div>
	<div class="row home-form">

    <div class="col-lg-8">
        <form class="form-vertical" role="form" method="post" action="{{ route('auth.signin')}}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                
                <input type="text" name="email" class="form-control" id="email" placeholder="Staff email" value="{{ Request::old('email') ?: '' }}">
                 @if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
            </div>
           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                
                <input type="password" name="password" class="form-control" placeholder="Password" id="password">
                 @if ($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </div>
</div>
</body>
 
@stop