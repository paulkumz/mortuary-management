<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('content')}}">Mortuary Management System</a>
        </div>
        <div class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check()) 
                    <li><a href="{{ route('content', ['username' =>Auth::user()->username])}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->getTitle() }} {{ Auth::user()->getSurname() }}</a></li>
                    <li><a href="{{ route('auth.signout')}}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> logout</a></li>
                 @else
                    <li><a href="{{ route('auth.signup')}}">Sign up</a></li>
                    <li><a href="{{ route('auth.signin')}}">Sign in</a></li>
                @endif 
            </ul>
        </div>
    </div>
</nav>
