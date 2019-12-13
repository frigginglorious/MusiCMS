@extends('layouts.main')

@section('content')

<script src="/js/isotope.pkgd.min.js"></script>

		<div id="content"  class="clients">
			<div id="">
				<h2>Test Owner?</h2>
				<center><span class="dim">(Person/Place/Thing)</span></center>
			</div>
			<div class="grid">
			<div class="grid-item">
			<div class="imgDiv">
				<img class="bandImg" src="/images/logo.png"/>
			</div>
			<span class="bandCaption"> <a href="https://www.website.com/">A Band</a>

				  {{-- (Head <i class="fa fa-wrench" aria-hidden="true"></i>) --}}
			</span>
			</div>
		</div>
	</div>


<script>
$('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  layoutMode: 'fitRows'
});
</script>
@endsection
