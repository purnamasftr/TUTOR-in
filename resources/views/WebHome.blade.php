@extends('login-default')

@section('content')
<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('{{URL::to('/')}}/../web-tutorin-fix/img/background11.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="{{ url('/webhome') }}">
							<img class="logo" src="{{URL::to('/')}}/../web-tutorin-fix/img/logo1.png" alt="logo">
							<img class="logo-alt" src="{{URL::to('/')}}/../web-tutorin-fix/img/logo1-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">TUTOR-in</h1>
							<p class="white-text">Platform pencarian tutor se-IPB
							</p>


              @if (Route::has('login'))
                  @auth
                      <div class="top-right links">
                          <a</a>
													<button onclick="window.location='{{ url('/userhome') }}'" class="white-btn">Homepage</button>
                      </div>
              @else
							        <button onclick="window.location='{{ route('register') }}'" class="main-btn">Sign Up</button>
                      <button onclick="window.location='{{ route('login') }}'" class="white-btn">Log In</button>
                  @endauth
              @endif
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to TUTOR-in</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>TUTOR-in adalah...</h3>
						<p>Platform untuk mempertemukan tutor-tutor berbakat di IPB dan mahasiswa yang ingin belajar</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Beragam mata kuliah tersedia</h3>
						<p>Ratusan mata kuliah dari 10 Fakultas jenjang S1 IPB dan 18 Prodi jenjang D3 IPB</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Terbuka untuk seluruh mahasiswa IPB</h3>
						<p>Seluruh mahasiswa IPB baik jenjang D3 maupun S1 dapat mencari tutor dan berpartisipasi menjadi tutor</p>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('{{URL::to('/')}}/../web-tutorin-fix/img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">451</span></h3>
						<span class="white-text">Murid</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span></h3>
						<span class="white-text">Tutor</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">>100</span></h3>
						<span class="white-text">Mata Kuliah</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->


	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-lg-6">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>0819-0124-6684</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-lg-6">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>tutorin@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

@endsection
