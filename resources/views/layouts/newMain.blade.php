<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
  Edited by @frigginglorious
-->
<html>
	<head>
    <title>{{ config('app.SITE_NAME') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    {{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/bootstrapEdited.css"> --}}

		<link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/all.min.css">

	
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <meta name="description" content="Musician's Portfolio / Content Management for an Electronic Press Kit">

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			{{-- <script src="/js/jquery.scrollzer.min.js"></script> --}}

			<script src="/js/skel.min.js"></script>
			<script src="/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/js/main.js"></script>
			<!-- bxSlider Javascript file -->
			<script src="/bxslider/jquery.bxslider.min.js"></script>
			<!-- bxSlider CSS file -->
			<link href="/bxslider/jquery.bxslider.min.css" rel="stylesheet" />

	</head>
	<body>
		<div id="allWrapper">
	@section('sidebar')
		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<a href="/">
						<div id="logo">
							<span class="image avatar48"><img src="/images/logo.png" id="uplogo" alt="{{ config('app.SITE_NAME') }} Logo" /></span>

						</div>
						</a>
					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="/artist-list" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Artists</span></a>
									@if(isset($roles))
										<ul class="subNavList">
											<li class="subNav">All</li>
										@foreach ($roles as $role)
											{{-- <li class="subNav">{{$role->name}}</li> --}}
											<li class="subNav"><i class="ef {{$role->icon}}" aria-hidden="true" title="{{$role->name}}"></i>{{$role->name}}</li>

										@endforeach
									</ul>
									@endif
								</li>
								<!--
								<li><a href="/gear-list" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Gear</span></a>
									@if(isset($types))
										<ul class="subNavList">
											<li class="subNav">All</li>
										<?php $nav = App\Type::nav(); ?>
										@foreach ($nav as $type)
											{{-- <li class="subNav">{{$role->name}}</li> --}}
											<li class="subNav">{{$type}}</li>

										@endforeach
									</ul>

									@endif
								</li> 
								-->
								{{-- <li><a href="/gallery" id="gallery-link" class="skel-layers-ignoreHref"><span class="icon fa-picture-o">Gallery</span></a></li> --}}

								<li><a href="/#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-street-view">About</span></a></li>
								<li><a href="/contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://www.facebook.com/{{ config('app.SITE_NAME') }}" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/{{ config('app.SITE_NAME') }}" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
							{{-- <li><a href="/contact" class="icon fa-envelope"><span class="label">Email</span></a></li> --}}
							<li><a href="https://www.youtube.com/{{ config('app.SITE_NAME') }}" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
						</ul>

				</div>

			</div>
			@show

			<!--Services -->
			<!-- Main -->
				<div id="main">

					@section('slider')
					<div id ="sliderDiv">
						<ul class="bxslider">
							<?php $col = app('App\Http\Controllers\sliderPicsController')->getCollection(); ?>
							@foreach($col as $c)
						  <li><img class="sliderImg" src="/uploads/sliderPics/{{$c}}" /></li>

					  		@endforeach
						  {{-- <li><img src="/uploads/sliderPics/IMG_0272.jpeg" /></li>
						  <li><img src="/uploads/sliderPics/IMG_0279.jpeg" /></li> --}}
						</ul>
					</div>
					{{-- <div class="medianDiv">
						@for($i = -100; $i <= 100; $i++)
							<span class="medianText" style="margin-left:{{$i * 10}}px !important; z-index:{{$i}}">{{ config('app.SITE_NAME') }}</span>
						@endfor
					</div> --}}
					@show

@yield('content')




			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="license">
						<li>{{ config('app.SITE_NAME') }}. All rights perversed.</li><li>Built With: <a href="https://github.com/frigginglorious/MusiCMS" target="_blank">musicCMS</a></li>
					</ul>

			</div>



			<script>

			// Insert Analytics Code

				$(document).ready(function(){
				  $('.bxslider').bxSlider({
					  pager: false,
					  auto: true,
				  });
				  $( window ).resize(function() {
					  $('.pageTitle').width($("#top").width());
				  });
				  $('.pageTitle').width($("#top").width());
				});
			</script>
		</div>

	</body>
</html>
