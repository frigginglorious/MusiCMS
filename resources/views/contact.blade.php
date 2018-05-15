@extends('layouts.newMain')

@section('content')

<!-- Contact -->
  <section id="top" class="four">
    <div class="container">
        <header class="sliderDiv">
    			<div class="headerDiv">
    				<h2 class="pageTitle" id="pageTitle">Contact</h2>
    			</div>
    	</header>

      <p>
        <h1 itemscope="" itemtype="http://data-vocabulary.org/Organization" id="contactHead">Get in touch by sending me an email</h1>
        <h3><a href="mailto:{{ APP_ENV('EMAIL_ADDRESS') }}" target="_top">{{ APP_ENV('EMAIL_ADDRESS') }}</a></h3>
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

    </div>
  </section>
@endsection
