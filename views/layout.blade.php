<!DOCTYPE html>
<html lang="@yield('locale')">
	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
    	@yield('metas')
    	<link type="image/x-icon" rel="icon" href="{{ asset('assets/favicon.ico') }}" />
    	<link type="image/x-icon" rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" />
    	<link rel="apple-touch-icon" href="{{ asset('assets/apple-touch-icon.png') }}" />
    	<link rel="stylesheet" href="{{ asset('assets/libs/css/bootstrap.min.css') }}" />
    	@yield('css')
    	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
  	<body>
  		@yield('content')
	    <!-- jQuery first, then Bootstrap JS. -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="{{ asset('assets/libs/js/bootstrap.min.js') }}"></script>
	    @yield('js')
  </body>
</html>