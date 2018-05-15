@extends('layouts.newMain')

@section('content')
    <script type="text/javascript" src="/js/instafeed.min.js"></script>

  <section id="top" class="four">
    <div class="container">
        <header class="sliderDiv">
    			<div class="headerDiv">
    				<h2 class="pageTitle" id="pageTitle">Gallery</h2>
    			</div>
    	</header>

      <p>

</p>

      {{-- <form method="post" action="#">
        <div class="row">
          <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
          <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
          <div class="12u$">
            <textarea name="message" placeholder="Message"></textarea>
          </div>
          <div class="12u$">
            <input type="submit" value="Send Message" />
          </div>
        </div>
      </form> --}}
      <script type="text/javascript">
          var feed = new Instafeed({
              get: 'tagged',
              tagName: 'Hacktoberfest',
              clientId: '5073748584354c03b856be2ca17ab781'
          });
          feed.run();
      </script>
    </div>
  </section>
@endsection
