@extends('layouts.newMain')

@section('content')

	<script src="/js/isotope.pkgd.min.js"></script>

	<section id="top" class="five">
		<div class="container">

			{{-- <header class="headerDiv">
				<div class="container">
					<div class="col-xs-6">
						<h2 class="pageTitle">Music Gears</h2>

						{{-- <ul class="topList">
							@foreach($types as $type)
								<li><i class="ef {{$type->icon}}" aria-hidden="true" title="{{$type->name}}"></i>{{$type->name}}</li>
							@endforeach
						</ul> --}}
					{{-- </div>
				</div>

			</header> --}}
			<header class="sliderDiv">
					<div class="headerDiv">
						<h2 class="pageTitle" id="pageTitle">Gear</h2>
					</div>
			</header>

			<div class="grid">
				@foreach($types as $type)
					@if($type->gear->count())
						<div class="grid-item">
							<div class="gridImgDiv">
								<h3>{{$type->name}}</h3>
								<ul>
								@foreach ($type->gear as $gear)

									<li>{{$gear->name}}</li>
									<li class="gear_short_description">{{$gear->short_description}}</li>



								@endforeach
							</ul>
								{{-- <img class="gridBandImg" src="/uploads/bandPics/{{$type->pic}}"/> --}}
								<div class="shadowInset"></div>

							</div>
						</div>
					@endif
				@endforeach


			</div>
		</div>
		<footer>
			{{-- <a href="#gear-list" class="button scrolly">About</a> --}}
		</footer>
	</section>

	<script>

	var $grid = $('.grid').isotope({
		// options...
		itemSelector: '.grid-item',
		masonry: {
			columnWidth: 20
		},

		// getSortData: {
		// 	class: function(it){
		// 		console.log(it);
		// 		$(it).hasClass("fa-deaf");
		// 	}
		// },
	});

	// $(".ef").click(function(){
	// 	var theClass = $(this).attr("class").split(/\s+/)[2];
	// 	// $grid.isotope({ filter: filterFns['byThisClass'] });
	// 	$grid.isotope({ filter: function() {
	// 	  // var name = $(this).find('.name').text();
	// 	  // return name.match( /ium$/ );
	// 		return $(this).find("i").hasClass(theClass);
	// 		// console.log(this);
	// 	} });
	//
	// });
	$(document).ready(function(){
		setTimeout(function(){
      $grid.isotope('layout');
      $grid.isotope({ filter: function() {
//         var matcher = $(this).find('h3').html().match("Studio");
        var matcher = $(this).find('h3').html().match("{{$types[0]['name']}}");
        return matcher;
      } });
	  }, 200);
    $(".subNav").click(function(){
      var nav = $(this).html();
      console.log(nav);
      if (nav == "All"){
        // nav = "Mics";
        $grid.isotope({ filter: '*'});
      }else if (nav == "Mic Locker"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Mics");
          return matcher;
        } });
      }else if(nav == "Outboard"){
        nav = "Pre Amps Compressors EQs";
        $grid.isotope({ filter: function() {
          // var name = $(this).find('.name').text();
          // return name.match( /ium$/ );
          var matcher = $(this).find('h3').html().match("Pre Amps");
          matcher += $(this).find('h3').html().match("Compressors");
          matcher += $(this).find('h3').html().match("EQs");

        //   console.log(matcher);
          return matcher;

        } });
      }else if (nav == "Monitoring"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Monitoring");
          matcher += $(this).find('h3').html().match("Artist Monitor Systems");
          return matcher;
        } });
      }else if (nav == "DAW"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Conversion");
          matcher += $(this).find('h3').html().match("Software");
          matcher += $(this).find('h3').html().match("Computers");
          return matcher;
        } });
      }else if (nav == "Amps"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Guitar Amps");
          matcher += $(this).find('h3').html().match("Bass Amps");
          return matcher;
        } });
      }else if (nav == "Instruments"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Guitars");
          matcher += $(this).find('h3').html().match("Keyboards");
          matcher += $(this).find('h3').html().match("Drums");
          return matcher;
        } });
      }else if (nav == "FX Pedals"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Guitar FX Pedals");
          return matcher;
        } });
      }else if (nav == "Misc"){
        // nav = "Mics";
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("Miscellaneous");
          matcher += $(this).find('h3').html().match("DI Boxes");
          matcher += $(this).find('h3').html().match("Cables");
          return matcher;
        } });
      }
      @foreach($types as $type)
      else if (nav == "{{$type['name']}}"){
        $grid.isotope({ filter: function() {
          var matcher = $(this).find('h3').html().match("{{$type['name']}}");
          return matcher;
        } });
      }
      @endforeach
      else{
        $grid.isotope({ filter: function() {
          // var name = $(this).find('.name').text();
          // return name.match( /ium$/ );
          var matcher = $(this).find('h3').html().match(nav);
          console.log(matcher);
          return matcher;

        } });
      }

    });
		// $grid.imagesLoaded().progress( function() {
		// 		$grid.isotope('layout');
		// });
	});

	</script>
@endsection
