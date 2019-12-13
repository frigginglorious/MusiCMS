<!DOCTYPE html>
<!-- saved from url=(0029)/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>{{ env('SITE_NAME') }}</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

<!-- <script async="" src="http://www.google-analytics.com/analytics.js"></script> -->
<script type="text/javascript" src="/js/jquery.min.js"></script>


<meta name="description" content="Musician's Portfolio / Content Management for an Electronic Press Kit">


<body id="home" cz-shortcut-listen="true">

	@section('sidebar')
	<div id="nav">
		<img src="/images/logo.png" id="uplogo">

		<a href="/">Home</a>


		<a href="/artist-list">Clients</a>
		<a href="/gear">Gear</a>
		<a href="/contact">Contact</a>
		<ul class="fa-ul">
			<li><i class="fa fa-facebook-square smIcon" aria-hidden="true"></i>
				<i class="fa fa-youtube smIcon" aria-hidden="true"></i>
			</li>

		</ul>
	</div>
	@show


	<!--Site Services -->
	@yield('content')



	<section class="container">


		<footer>


		</footer>
	</section>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57613284-1', 'auto');
		ga('send', 'pageview');

	</script>



</body>
</html>
