<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{{ asset('/css/content.css') }}}" rel="stylesheet"> 

    
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
</head>
<body>
@include('templates.partials.navigation')
<div class="container">
@include('templates.partials.alerts')
@yield('content')	
</div>
</body>
</html>