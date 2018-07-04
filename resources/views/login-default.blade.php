<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>TUTOR-in</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('web-tutorin-fix/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('web-tutorin-fix/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('web-tutorin-fix/css/owl.theme.default.css')}}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{asset('web-tutorin-fix/css/magnific-popup.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('web-tutorin-fix/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->

	<link type="text/css" rel="stylesheet" href="{{asset('web-tutorin-fix/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

		@yield('content')

	<!-- Preloader -->
	<div id="preloader">
	  <div class="preloader">
	    <span></span>
	    <span></span>
	    <span></span>
	    <span></span>
	  </div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{asset('web-tutorin-fix/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('web-tutorin-fix/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('web-tutorin-fix/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('web-tutorin-fix/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('web-tutorin-fix/js/main.js')}}"></script>
</body>

</html>
