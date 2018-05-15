@extends('layouts.newMain')

@section('content')

<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/imagesloaded.min.js"></script>


<section id="top" class="five">
	<div class="container">

	<header class="sliderDiv">
			<div class="headerDiv">
				<h2 class="pageTitle" id="pageTitle">Music Clients</h2>
			</div>
	</header>
				{{-- <ul class="topList"> --}}
		{{-- @foreach($roles as $role)
				<li><i class="ef {{$role->icon}}" aria-hidden="true" title="{{$role->name}}"></i>{{$role->name}}</li>
		@endforeach --}}
				{{-- </ul> --}}




		<div class="grid">
			@foreach($clients as $client)
			<div class="grid-item">
			<div class="gridImgDiv">
				{{-- <div class="shadowInset"></div> --}}

				<span class="gridBandName"> <a href="{{$client->url}}" target="_blank">{{$client->name}}</a></span>

				<img class="gridBandImg" src="/uploads/bandPics/{{$client->pic}}"/>

			<span class="gridRoles">
				@foreach($client->getRoles as $role)
			  	<i class="ef {{$role->role->icon}}" aria-hidden="true" title="{{$role->role->name}}"></i>
				@endforeach
			</span>
			</div>
			</div>

			@endforeach


		</div>
	</div>
	<footer>
		{{-- <a href="#client-list" class="button scrolly">About</a> --}}
	</footer>
</section>

<script>

	var $grid = $('.grid').isotope({
	  	  itemSelector: '.grid-item',
		  layoutMode: 'fitRows',
	});
	$(".ef").click(function(){
		var theClass = $(this).attr("class").split(/\s+/)[2];
		$grid.isotope({ filter: function() {
			return $(this).find("i").hasClass(theClass);
		} });
	});

	$(".subNav").click(function(){
		if($(this).html() == "All"){
			$grid.isotope({ filter: '*'});

		}else{
			var theClass = $(this).find("i").first().attr("class").split(/\s+/)[2];
			$grid.isotope({ filter: function() {
				return $(this).find("i").hasClass(theClass);
			} });
		}

	});

	$grid.imagesLoaded().progress( function() {
  		$grid.isotope('layout');
	});

	$(document).ready(function(){
		setTimeout(function(){
			$grid.isotope('layout');

		//do what you need here
	}, 200);
});
</script>
@endsection
